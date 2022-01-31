<?php

declare(strict_types=1);

/**
 * This code was auto-generated by {this script}[https://github.com/cucumber/common/blob/main/messages/jsonschema/scripts/codegen.rb]
 */

namespace Cucumber\Messages;

use JsonSerializable;
use Cucumber\Messages\DecodingException\SchemaViolationException;

/**
 * Represents the Feature message in Cucumber's message protocol
 * @see https://github.com/cucumber/common/tree/main/messages#readme
 *
 */
final class Feature implements JsonSerializable
{
    use JsonEncodingTrait;

    public function __construct(
        /**
         * The location of the `Feature` keyword
         */
        public readonly Location $location = new Location(),

        /**
         * All the tags placed above the `Feature` keyword
         * @param list<Tag> $tags
         */
        public readonly array $tags = [],

        /**
         * The [ISO 639-1](https://en.wikipedia.org/wiki/ISO_639-1) language code of the Gherkin document
         */
        public readonly string $language = '',

        /**
         * The text of the `Feature` keyword (in the language specified by `language`)
         */
        public readonly string $keyword = '',

        /**
         * The name of the feature (the text following the `keyword`)
         */
        public readonly string $name = '',

        /**
         * The line(s) underneath the line with the `keyword` that are used as description
         */
        public readonly string $description = '',

        /**
         * Zero or more children
         * @param list<FeatureChild> $children
         */
        public readonly array $children = [],
    ) {
    }

    /**
     * @throws SchemaViolationException
     *
     * @internal
     */
    public static function fromArray(array $arr): self
    {
        self::ensureLocation($arr);
        self::ensureTags($arr);
        self::ensureLanguage($arr);
        self::ensureKeyword($arr);
        self::ensureName($arr);
        self::ensureDescription($arr);
        self::ensureChildren($arr);

        return new self(
            Location::fromArray($arr['location']),
            array_map(fn (array $member) => Tag::fromArray($member), $arr['tags']),
            (string) $arr['language'],
            (string) $arr['keyword'],
            (string) $arr['name'],
            (string) $arr['description'],
            array_map(fn (array $member) => FeatureChild::fromArray($member), $arr['children']),
        );
    }

    /**
     * @psalm-assert array{location: array} $arr
     */
    private static function ensureLocation(array $arr): void
    {
        if (!array_key_exists('location', $arr)) {
            throw new SchemaViolationException('Property \'location\' is required but was not found');
        }
        if (array_key_exists('location', $arr) && !is_array($arr['location'])) {
            throw new SchemaViolationException('Property \'location\' was not array');
        }
    }

    /**
     * @psalm-assert array{tags: array} $arr
     */
    private static function ensureTags(array $arr): void
    {
        if (!array_key_exists('tags', $arr)) {
            throw new SchemaViolationException('Property \'tags\' is required but was not found');
        }
        if (array_key_exists('tags', $arr) && !is_array($arr['tags'])) {
            throw new SchemaViolationException('Property \'tags\' was not array');
        }
    }

    /**
     * @psalm-assert array{language: string|int|bool} $arr
     */
    private static function ensureLanguage(array $arr): void
    {
        if (!array_key_exists('language', $arr)) {
            throw new SchemaViolationException('Property \'language\' is required but was not found');
        }
        if (array_key_exists('language', $arr) && is_array($arr['language'])) {
            throw new SchemaViolationException('Property \'language\' was array');
        }
    }

    /**
     * @psalm-assert array{keyword: string|int|bool} $arr
     */
    private static function ensureKeyword(array $arr): void
    {
        if (!array_key_exists('keyword', $arr)) {
            throw new SchemaViolationException('Property \'keyword\' is required but was not found');
        }
        if (array_key_exists('keyword', $arr) && is_array($arr['keyword'])) {
            throw new SchemaViolationException('Property \'keyword\' was array');
        }
    }

    /**
     * @psalm-assert array{name: string|int|bool} $arr
     */
    private static function ensureName(array $arr): void
    {
        if (!array_key_exists('name', $arr)) {
            throw new SchemaViolationException('Property \'name\' is required but was not found');
        }
        if (array_key_exists('name', $arr) && is_array($arr['name'])) {
            throw new SchemaViolationException('Property \'name\' was array');
        }
    }

    /**
     * @psalm-assert array{description: string|int|bool} $arr
     */
    private static function ensureDescription(array $arr): void
    {
        if (!array_key_exists('description', $arr)) {
            throw new SchemaViolationException('Property \'description\' is required but was not found');
        }
        if (array_key_exists('description', $arr) && is_array($arr['description'])) {
            throw new SchemaViolationException('Property \'description\' was array');
        }
    }

    /**
     * @psalm-assert array{children: array} $arr
     */
    private static function ensureChildren(array $arr): void
    {
        if (!array_key_exists('children', $arr)) {
            throw new SchemaViolationException('Property \'children\' is required but was not found');
        }
        if (array_key_exists('children', $arr) && !is_array($arr['children'])) {
            throw new SchemaViolationException('Property \'children\' was not array');
        }
    }
}
