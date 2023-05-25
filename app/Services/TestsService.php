<?php

namespace App\Services;

class TestsService {

    public function getAllTests(): array {
        return [
            [
                "id" => 286453,
                "name" => "Prueba de azucar",
                "type" => "Sangre",
                "date" => "23/02/2023",
                "time" => "10:00 AM",
                "url" => "https://www.ice.gov/doclib/careers/pdf/medicalPreemploymentExamHistory.pdf",
                "clinic" => [
                    "id" => 282353,
                    "name" => "SAN LORENZO",
                ],
                "patient" => [
                    "id" => 281253,
                    "name" => "Alejandro",
                ],
                "status" => false
            ],
            [
                "id" => 286153,
                "name" => "Prueba de orina",
                "type" => "Orina",
                "date" => "23/02/2023",
                "time" => "10:00 AM",
                "url" => "https://www.ice.gov/doclib/careers/pdf/medicalPreemploymentExamHistory.pdf",
                "clinic" => [
                    "id" => 289353,
                    "name" => "SAN LORENZO",
                ],
                "patient" => [
                    "id" => 283453,
                    "name" => "Felix",
                ],
                "status" => true
            ],
        ];
    }

}