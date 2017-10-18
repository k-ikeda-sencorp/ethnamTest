<?php
// vim: foldmethod=marker
/**
 *  Ethnamtest_ViewClass.php
 *
 *  @author     {$author}
 *  @package    Ethnamtest
 */

// {{{ Ethnamtest_ViewClass
/**
 *  View class.
 *
 *  @author     {$author}
 *  @package    Ethnamtest
 *  @access     public
 */
class Ethnamtest_ViewClass extends Ethna_ViewClass
{
    /**#@+
     *  @access protected
     */

    /** @var  string  set layout template file   */
    protected $_layout_file = 'layout';

    /**#@+
     *  @access public
     */

    /** @var boolean  layout template use flag   */
    public $use_layout = true;

    /**
     *  set common default value.
     *
     *  @access protected
     *  @param  object  Ethnamtest_Renderer  Renderer object.
     */
    protected function _setDefault($renderer)
    {
    }

}
// }}}

