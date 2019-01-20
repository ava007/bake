<?php
declare(strict_types=1);
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.1.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace Bake\Command;

/**
 * Shell code generator.
 */
class ShellCommand extends SimpleBakeCommand
{
    /**
     * Task name used in path generation.
     *
     * @var string
     */
    public $pathFragment = 'Shell/';

    /**
     * {@inheritDoc}
     */
    public function name(): string
    {
        return 'shell';
    }

    /**
     * {@inheritDoc}
     */
    public function fileName(string $name): string
    {
        return $name . 'Shell.php';
    }

    /**
     * {@inheritDoc}
     */
    public function template(): string
    {
        return 'Shell/shell';
    }
}
