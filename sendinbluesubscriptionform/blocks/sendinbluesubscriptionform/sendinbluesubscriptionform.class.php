<?php
namespace Block;
/**
 * sendinblue subscription form - Main Class
 * 
 * 
 * 
 * @copyright 2019 Roy Hadrianoro
 *
 * @license MIT
 *
 * @package sendinbluesubscriptionform
 * @version 1.0
 * @author  Roy Hadrianoro <roy.hadrianoro@schlix.com>
 * @link    https://www.schlix.com
 */

class sendinbluesubscriptionform extends \SCHLIX\cmsBlock
{
    public function Run()
    {
        $block_title = $this->config['str_block_title'];
        $app = new \App\sendinbluesubscriptionform();
        $this->loadTemplateFile('view.block',compact(array_keys(get_defined_vars())));
    }
}
