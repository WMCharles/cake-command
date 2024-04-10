<?php

declare(strict_types=1);

namespace App\Controller;

class TextsController extends AppController
{
    public function index(): void
    {
        $randomText = $this->generateRandomText();
        $fileName = date('YmdHis') . '.txt';
        $directoryPath = WWW_ROOT . 'txt';
        if (!is_dir($directoryPath)) {
            mkdir($directoryPath, 0755, true);
        }
        $filePath = WWW_ROOT . 'txt' . DS . $fileName;
        file_put_contents($filePath, $randomText);
    }

    public function list()
    {
        $directoryPath = WWW_ROOT . 'txt';
        if (!is_dir($directoryPath)) {
            $fileNames = [];
        } else {
            $fileNames = array_diff(scandir($directoryPath), ['.', '..']);
            foreach ($fileNames as $fileName) {
                $files[] = (object) [
                    'name' => $fileName,
                    'created' => date('Y-m-d H:i:s', filemtime($directoryPath . DS . $fileName)),
                ];
            }
        }
        $this->set(compact('files'));
    }

    private function generateRandomText(): string
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $randomString = '';
        for ($i = 0; $i < 10; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }
}
