<?php
namespace Block;

class sendinbluesubscriptionform extends \SCHLIX\cmsBlock
{
    protected static $number_of_instances = 0;
    public function Run()
    {
        $current_instance_id = ++self::$number_of_instances;
        $block_title = $this->config['str_block_title'];
        $app = new \App\sendinbluesubscriptionform();
        $this->loadTemplateFile('view.block',compact(array_keys(get_defined_vars())));
    }
}
