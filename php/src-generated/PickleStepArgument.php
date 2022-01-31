<?php

declare(strict_types=1);

/**
 * This code was auto-generated by {this script}[https://github.com/cucumber/common/blob/main/messages/jsonschema/scripts/codegen.rb]
 */

namespace Cucumber\Messages;

use JsonSerializable;
use Cucumber\Messages\DecodingException\SchemaViolationException;

/**
 * Represents the PickleStepArgument message in Cucumber's message protocol
 * @see https://github.com/cucumber/common/tree/main/messages#readme
 *
 * An optional argument */
final class PickleStepArgument implements JsonSerializable
{
    use JsonEncodingTrait;

    public function __construct(
        public readonly ?PickleDocString $docString = null,
        public readonly ?PickleTable $dataTable = null,
    ) {
    }

    /**
     * @throws SchemaViolationException
     *
     * @internal
     */
    public static function fromArray(array $arr): self
    {
        self::ensureDocString($arr);
        self::ensureDataTable($arr);

        return new self(
            isset($arr['docString']) ? PickleDocString::fromArray($arr['docString']) : null,
            isset($arr['dataTable']) ? PickleTable::fromArray($arr['dataTable']) : null,
        );
    }

    /**
     * @psalm-assert array{docString?: array} $arr
     */
    private static function ensureDocString(array $arr): void
    {
        if (array_key_exists('docString', $arr) && !is_array($arr['docString'])) {
            throw new SchemaViolationException('Property \'docString\' was not array');
        }
    }

    /**
     * @psalm-assert array{dataTable?: array} $arr
     */
    private static function ensureDataTable(array $arr): void
    {
        if (array_key_exists('dataTable', $arr) && !is_array($arr['dataTable'])) {
            throw new SchemaViolationException('Property \'dataTable\' was not array');
        }
    }
}
