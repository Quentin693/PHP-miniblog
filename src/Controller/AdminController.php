<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Comment;
use App\Form\ArticleType;
use App\Repository\ArticleRepository;
use App\Repository\CommentRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/admin')]
#[IsGranted('ROLE_USER')]
class AdminController extends AbstractController
{
    #[Route('/', name: 'app_admin_dashboard')]
    public function dashboard(
        ArticleRepository $articleRepository,
        CommentRepository $commentRepository
    ): Response {
        $user = $this->getUser();
        
        if (in_array('ROLE_ADMIN', $user->getRoles())) {
            // Admin voit tous les articles
            $articles = $articleRepository->findBy([], ['createdAt' => 'DESC'], 10);
            $comments = $commentRepository->findBy([], ['createdAt' => 'DESC'], 10);
        } else {
            // Utilisateur normal voit seulement ses articles
            $articles = $articleRepository->findBy(['author' => $user], ['createdAt' => 'DESC'], 10);
            $comments = [];
        }

        return $this->render('admin/dashboard.html.twig', [
            'articles' => $articles,
            'comments' => $comments,
        ]);
    }

    #[Route('/article/new', name: 'app_admin_article_new')]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        SluggerInterface $slugger
    ): Response {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $article->setAuthor($this->getUser());
            $article->setSlug($slugger->slug($article->getTitle())->lower()->toString());
            
            $entityManager->persist($article);
            $entityManager->flush();

            $this->addFlash('success', 'Article créé avec succès !');
            return $this->redirectToRoute('app_admin_dashboard');
        }

        return $this->render('admin/article_form.html.twig', [
            'form' => $form,
            'article' => $article,
        ]);
    }

    #[Route('/article/{id}/edit', name: 'app_admin_article_edit')]
    public function edit(
        int $id,
        Request $request,
        ArticleRepository $articleRepository,
        EntityManagerInterface $entityManager,
        SluggerInterface $slugger
    ): Response {
        $article = $articleRepository->find($id);
        
        if (!$article) {
            throw $this->createNotFoundException('Article introuvable.');
        }
        
        $this->denyAccessUnlessGranted('ARTICLE_EDIT', $article);

        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $article->setSlug($slugger->slug($article->getTitle())->lower()->toString());
            $entityManager->flush();

            $this->addFlash('success', 'Article modifié avec succès !');
            return $this->redirectToRoute('app_admin_dashboard');
        }

        return $this->render('admin/article_form.html.twig', [
            'form' => $form,
            'article' => $article,
        ]);
    }

    #[Route('/article/{id}/delete', name: 'app_admin_article_delete', methods: ['POST'])]
    public function delete(
        int $id,
        Request $request,
        ArticleRepository $articleRepository,
        EntityManagerInterface $entityManager
    ): Response {
        $article = $articleRepository->find($id);
        
        if (!$article) {
            throw $this->createNotFoundException('Article introuvable.');
        }
        
        $this->denyAccessUnlessGranted('ARTICLE_DELETE', $article);

        if ($this->isCsrfTokenValid('delete'.$article->getId(), $request->request->get('_token'))) {
            $entityManager->remove($article);
            $entityManager->flush();

            $this->addFlash('success', 'Article supprimé avec succès !');
        }

        return $this->redirectToRoute('app_admin_dashboard');
    }

    #[Route('/comment/{id}/delete', name: 'app_admin_comment_delete', methods: ['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function deleteComment(
        int $id,
        Request $request,
        CommentRepository $commentRepository,
        EntityManagerInterface $entityManager
    ): Response {
        $comment = $commentRepository->find($id);
        
        if (!$comment) {
            throw $this->createNotFoundException('Commentaire introuvable.');
        }
        if ($this->isCsrfTokenValid('delete'.$comment->getId(), $request->request->get('_token'))) {
            $articleSlug = $comment->getArticle()->getSlug();
            $entityManager->remove($comment);
            $entityManager->flush();

            $this->addFlash('success', 'Commentaire supprimé avec succès !');
            return $this->redirectToRoute('app_article_show', ['slug' => $articleSlug]);
        }

        return $this->redirectToRoute('app_admin_dashboard');
    }
}

