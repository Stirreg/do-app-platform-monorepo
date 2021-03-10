<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/name-to-upper/{name}', 'GET')]
class NameToUpperController
{
    public function __invoke(string $name): JsonResponse
    {
        return new JsonResponse(['name' => strtoupper($name)]);
    }
}
