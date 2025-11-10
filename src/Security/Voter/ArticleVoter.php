<?php

namespace App\Security\Voter;

use App\Entity\Article;
use App\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class ArticleVoter extends Voter
{
    public const EDIT = 'ARTICLE_EDIT';
    public const DELETE = 'ARTICLE_DELETE';
    public const VIEW = 'ARTICLE_VIEW';

    protected function supports(string $attribute, mixed $subject): bool
    {
        return in_array($attribute, [self::EDIT, self::DELETE, self::VIEW])
            && $subject instanceof Article;
    }

    protected function voteOnAttribute(string $attribute, mixed $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();

        if (!$user instanceof User) {
            // L'utilisateur doit être connecté
            return false;
        }

        /** @var Article $article */
        $article = $subject;

        return match($attribute) {
            self::VIEW => $this->canView($article, $user),
            self::EDIT => $this->canEdit($article, $user),
            self::DELETE => $this->canDelete($article, $user),
            default => false,
        };
    }

    private function canView(Article $article, User $user): bool
    {
        // Si l'article est publié, tout le monde peut le voir
        if ($article->isPublished()) {
            return true;
        }

        // Sinon, seulement l'auteur ou un admin
        return $this->canEdit($article, $user);
    }

    private function canEdit(Article $article, User $user): bool
    {
        // L'auteur peut modifier son article
        if ($article->getAuthor() === $user) {
            return true;
        }

        // Un admin peut tout modifier
        return in_array('ROLE_ADMIN', $user->getRoles());
    }

    private function canDelete(Article $article, User $user): bool
    {
        // Seul un admin peut supprimer
        return in_array('ROLE_ADMIN', $user->getRoles());
    }
}

