<?php
/**
 * MorriosStruct.php
 *
 * User: Morrios
 * Date: 2022/5/27
 * Email: <morrios@163.com>
 */

declare(strict_types = 1);

namespace Morrios\Struct;

/**
 * Class MorriosStruct
 *
 * @package Morrios\Struct
 */
abstract class MorriosStruct
{
    /**
     * MorriosStruct constructor.
     *
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $this->fill($data);
    }

    /**
     * create
     *
     * @param array $data
     * @return MorriosStruct
     * @author Morrios
     */
    public static function create(array $data = []): MorriosStruct
    {
        return new static($data);
    }

    /**
     * fill
     *
     * @param array $data
     * @return void
     * @author Morrios
     */
    public function fill(array $data)
    {
        foreach ($this as $property => $value) {
            $this->$property = $data[$property] ?? $value;
        }
    }

    /**
     * toArray
     *
     * @return array
     * @author Morrios
     */
    public function toArray(): array
    {
        $result = [];

        foreach ($this as $property => $value) {
            $result[$property] = $value;
        }

        return $result;
    }
}