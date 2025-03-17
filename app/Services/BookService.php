<?php
namespace App\Services;
class BookService {
    public function borrow(int $id, string $userId): string {
        return "User with ID = $userId borrowed a book with ID = $id using the Service layer,";
    }

}