<?php

namespace PhpBench\Expression\Printer;

use PhpBench\Expression\Ast\Node;
use PhpBench\Expression\NodePrinters;
use PhpBench\Expression\Printer;

final class NormalizingPrinter implements Printer
{
    /**
     * @var NodePrinters
     */
    private $printers;

    public function __construct(NodePrinters $printers)
    {
        $this->printers = $printers;
    }

    public function print(Node $node, array $params): string
    {
        return $this->printers->print($this, $node, $params);
    }
}