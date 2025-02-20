<?php
namespace App\Services;
final class AsciiService
{
    private array $asciiArray;
    private const START_ASCII = 44;
    private const END_ASCII = 124;
    public function __construct()
    {
        $this->initializeAsciiArray();
    }
    public  function initializeAsciiArray(): void
    {
        $this->asciiArray = array_map('chr', range(self::START_ASCII, self::END_ASCII));
        shuffle($this->asciiArray);
    }
    public function removeRandomCharacter(): void
    {
        $randomIndex = array_rand($this->asciiArray);
        unset($this->asciiArray[$randomIndex]);
        $this->asciiArray = array_values($this->asciiArray);
    }
    public function findMissingCharacter(): ?string
    {
        $fullSet = array_map('chr', range(self::START_ASCII, self::END_ASCII));
        $missingChars = array_diff($fullSet, $this->asciiArray);
        return reset($missingChars) ?: null;
    }
    public function displayAsciiArray()
    {
        return implode(' ', $this->asciiArray);
    }
    public function getAsciiArray(): array
    {
        return $this->asciiArray;
    }
}