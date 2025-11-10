<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Comment;
use App\Repository\ArticleRepository;
use App\Repository\CommentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ArticleController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(ArticleRepository $articleRepository, Request $request): Response
    {
        $page = $request->query->getInt('page', 1);
        $limit = 9; // 9 articles par page pour un layout en grille 3x3
        $category = $request->query->get('category');
        $region = $request->query->get('region');
        
        $queryBuilder = $articleRepository->createQueryBuilder('a')
            ->where('a.published = :published')
            ->setParameter('published', true);
        
        // Filtrer par catégorie si spécifiée
        if ($category) {
            $queryBuilder
                ->andWhere('a.category = :category')
                ->setParameter('category', $category);
        }
        
        // Filtrer par région si spécifiée
        if ($region) {
            $queryBuilder
                ->andWhere('a.region = :region')
                ->setParameter('region', $region);
        }
        
        $queryBuilder
            ->orderBy('a.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->setFirstResult(($page - 1) * $limit);
        
        $articles = $queryBuilder->getQuery()->getResult();
        
        // Compter le total pour la pagination
        $countQueryBuilder = $articleRepository->createQueryBuilder('a')
            ->select('COUNT(a.id)')
            ->where('a.published = :published')
            ->setParameter('published', true);
        
        if ($category) {
            $countQueryBuilder
                ->andWhere('a.category = :category')
                ->setParameter('category', $category);
        }
        
        if ($region) {
            $countQueryBuilder
                ->andWhere('a.region = :region')
                ->setParameter('region', $region);
        }
        
        $totalArticles = $countQueryBuilder->getQuery()->getSingleScalarResult();
        $totalPages = ceil($totalArticles / $limit);
        
        // Récupérer toutes les catégories et régions uniques pour les filtres
        $categories = $articleRepository->createQueryBuilder('a')
            ->select('DISTINCT a.category')
            ->where('a.published = :published AND a.category IS NOT NULL')
            ->setParameter('published', true)
            ->orderBy('a.category', 'ASC')
            ->getQuery()
            ->getSingleColumnResult();
        
        $regions = $articleRepository->createQueryBuilder('a')
            ->select('DISTINCT a.region')
            ->where('a.published = :published AND a.region IS NOT NULL')
            ->setParameter('published', true)
            ->orderBy('a.region', 'ASC')
            ->getQuery()
            ->getSingleColumnResult();

        return $this->render('article/index.html.twig', [
            'articles' => $articles,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'categories' => $categories,
            'regions' => $regions,
            'selectedCategory' => $category,
            'selectedRegion' => $region,
        ]);
    }

    #[Route('/articles', name: 'app_articles')]
    public function list(ArticleRepository $articleRepository, Request $request): Response
    {
        $page = $request->query->getInt('page', 1);
        $limit = 12;
        $category = $request->query->get('category');
        $region = $request->query->get('region');
        
        $queryBuilder = $articleRepository->createQueryBuilder('a')
            ->where('a.published = :published')
            ->setParameter('published', true);
        
        // Filtrer par catégorie si spécifiée
        if ($category) {
            $queryBuilder
                ->andWhere('a.category = :category')
                ->setParameter('category', $category);
        }
        
        // Filtrer par région si spécifiée
        if ($region) {
            $queryBuilder
                ->andWhere('a.region = :region')
                ->setParameter('region', $region);
        }
        
        $queryBuilder
            ->orderBy('a.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->setFirstResult(($page - 1) * $limit);
        
        $articles = $queryBuilder->getQuery()->getResult();
        
        // Compter le total pour la pagination
        $countQueryBuilder = $articleRepository->createQueryBuilder('a')
            ->select('COUNT(a.id)')
            ->where('a.published = :published')
            ->setParameter('published', true);
        
        if ($category) {
            $countQueryBuilder
                ->andWhere('a.category = :category')
                ->setParameter('category', $category);
        }
        
        if ($region) {
            $countQueryBuilder
                ->andWhere('a.region = :region')
                ->setParameter('region', $region);
        }
        
        $totalArticles = $countQueryBuilder->getQuery()->getSingleScalarResult();
        $totalPages = ceil($totalArticles / $limit);
        
        // Récupérer toutes les catégories et régions uniques pour les filtres
        $categories = $articleRepository->createQueryBuilder('a')
            ->select('DISTINCT a.category')
            ->where('a.published = :published AND a.category IS NOT NULL')
            ->setParameter('published', true)
            ->orderBy('a.category', 'ASC')
            ->getQuery()
            ->getSingleColumnResult();
        
        $regions = $articleRepository->createQueryBuilder('a')
            ->select('DISTINCT a.region')
            ->where('a.published = :published AND a.region IS NOT NULL')
            ->setParameter('published', true)
            ->orderBy('a.region', 'ASC')
            ->getQuery()
            ->getSingleColumnResult();

        return $this->render('article/list.html.twig', [
            'articles' => $articles,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'categories' => $categories,
            'regions' => $regions,
            'selectedCategory' => $category,
            'selectedRegion' => $region,
        ]);
    }

    #[Route('/article/{slug}', name: 'app_article_show')]
    public function show(
        string $slug,
        ArticleRepository $articleRepository,
        CommentRepository $commentRepository
    ): Response {
        $article = $articleRepository->findOneBy(['slug' => $slug]);
        
        if (!$article) {
            throw $this->createNotFoundException('Cet article n\'existe pas.');
        }
        
        if (!$article->isPublished()) {
            throw $this->createNotFoundException('Cet article n\'est pas disponible.');
        }

        $comments = $commentRepository->findApprovedByArticle($article->getId());

        return $this->render('article/show.html.twig', [
            'article' => $article,
            'comments' => $comments,
        ]);
    }

    #[Route('/article/{slug}/comment', name: 'app_article_comment', methods: ['POST'])]
    public function addComment(
        string $slug,
        Request $request,
        ArticleRepository $articleRepository,
        EntityManagerInterface $entityManager
    ): Response {
        $article = $articleRepository->findOneBy(['slug' => $slug]);
        
        if (!$article || !$article->isPublished()) {
            throw $this->createNotFoundException('Cet article n\'est pas disponible.');
        }

        $authorName = $request->request->get('author_name');
        $authorEmail = $request->request->get('author_email');
        $content = $request->request->get('content');

        // Validation simple
        if (empty($authorName) || empty($authorEmail) || empty($content)) {
            $this->addFlash('error', 'Tous les champs sont obligatoires.');
            return $this->redirectToRoute('app_article_show', ['slug' => $article->getSlug()]);
        }

        if (!filter_var($authorEmail, FILTER_VALIDATE_EMAIL)) {
            $this->addFlash('error', 'L\'adresse email n\'est pas valide.');
            return $this->redirectToRoute('app_article_show', ['slug' => $article->getSlug()]);
        }

        $comment = new Comment();
        $comment->setAuthorName($authorName);
        $comment->setAuthorEmail($authorEmail);
        $comment->setContent($content);
        $comment->setArticle($article);
        $comment->setApproved(true); // Auto-approuvé pour simplifier

        $entityManager->persist($comment);
        $entityManager->flush();

        $this->addFlash('success', 'Votre commentaire a été ajouté avec succès !');

        return $this->redirectToRoute('app_article_show', ['slug' => $article->getSlug()]);
    }

    #[Route('/api/articles', name: 'app_api_articles', methods: ['GET'])]
    public function apiArticles(ArticleRepository $articleRepository, Request $request): JsonResponse
    {
        $page = $request->query->getInt('page', 1);
        $limit = 9;
        $category = $request->query->get('category');
        $region = $request->query->get('region');
        
        $queryBuilder = $articleRepository->createQueryBuilder('a')
            ->where('a.published = :published')
            ->setParameter('published', true);
        
        if ($category) {
            $queryBuilder
                ->andWhere('a.category = :category')
                ->setParameter('category', $category);
        }
        
        if ($region) {
            $queryBuilder
                ->andWhere('a.region = :region')
                ->setParameter('region', $region);
        }
        
        $queryBuilder
            ->orderBy('a.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->setFirstResult(($page - 1) * $limit);
        
        $articles = $queryBuilder->getQuery()->getResult();
        
        // Compter le total
        $countQueryBuilder = $articleRepository->createQueryBuilder('a')
            ->select('COUNT(a.id)')
            ->where('a.published = :published')
            ->setParameter('published', true);
        
        if ($category) {
            $countQueryBuilder
                ->andWhere('a.category = :category')
                ->setParameter('category', $category);
        }
        
        if ($region) {
            $countQueryBuilder
                ->andWhere('a.region = :region')
                ->setParameter('region', $region);
        }
        
        $totalArticles = $countQueryBuilder->getQuery()->getSingleScalarResult();
        $totalPages = ceil($totalArticles / $limit);
        
        // Formatter les articles pour JSON
        $articlesData = array_map(function($article) {
            return [
                'id' => $article->getId(),
                'title' => $article->getTitle(),
                'slug' => $article->getSlug(),
                'excerpt' => $article->getExcerpt(),
                'location' => $article->getLocation(),
                'region' => $article->getRegion(),
                'category' => $article->getCategory(),
                'imageUrl' => $article->getImageUrl(),
                'createdAt' => $article->getCreatedAt()->format('d M Y'),
                'authorName' => $article->getAuthor()->getName(),
            ];
        }, $articles);
        
        return $this->json([
            'articles' => $articlesData,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'totalArticles' => $totalArticles,
        ]);
    }
}

