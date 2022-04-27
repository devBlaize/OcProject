<?php
    declare(strict_types=1);
   
    namespace App\Domaine\forum;
    use App\Domaine\User\user;
    class Message
    {
          public $contene;
          public $author;

          public function __construct(user $author, string $contene)
          {
              $this->authot =$author;
              $this->contene = $contene;
          }
    }