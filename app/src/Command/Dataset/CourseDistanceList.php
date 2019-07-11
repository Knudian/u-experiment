<?php declare(strict_types = 1);

namespace App\Command\Dataset;

/**
 * Class CourseDistanceList
 * @package App\Command\Dataset
 */
final class CourseDistanceList
{
    /**
     * distance de cours
     *
     * array<string> defines Distance du cour
     */
    public const VALUES = [
        'formation entièrement présentielle',
        'formation mixte',
        'formation entièrement à distance'
    ];
}
