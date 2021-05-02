<?php

namespace App\Entity;

use App\Repository\PostsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PostsRepository::class)
 */
class Posts
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $post_title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $post_slug;

    /**
     * @ORM\Column(type="text")
     */
    private $post_content;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $post_image;

    /**
     * @ORM\Column(type="datetime")
     */
    private $post_created_at;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $post_updated_at;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPostTitle(): ?string
    {
        return $this->post_title;
    }

    public function setPostTitle(string $post_title): self
    {
        $this->post_title = $post_title;

        return $this;
    }

    public function getPostSlug(): ?string
    {
        return $this->post_slug;
    }

    public function setPostSlug(string $post_slug): self
    {
        $this->post_slug = $post_slug;

        return $this;
    }

    public function getPostContent(): ?string
    {
        return $this->post_content;
    }

    public function setPostContent(string $post_content): self
    {
        $this->post_content = $post_content;

        return $this;
    }

    public function getPostImage(): ?string
    {
        return $this->post_image;
    }

    public function setPostImage(string $post_image): self
    {
        $this->post_image = $post_image;

        return $this;
    }

    public function getPostCreatedAt(): ?\DateTimeInterface
    {
        return $this->post_created_at;
    }

    public function setPostCreatedAt(\DateTimeInterface $post_created_at): self
    {
        $this->post_created_at = $post_created_at;

        return $this;
    }

    public function getPostUpdatedAt(): ?\DateTimeInterface
    {
        return $this->post_updated_at;
    }

    public function setPostUpdatedAt(?\DateTimeInterface $post_updated_at): self
    {
        $this->post_updated_at = $post_updated_at;

        return $this;
    }
}
