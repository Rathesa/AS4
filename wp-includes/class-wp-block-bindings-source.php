<?php
 final class WP_Block_Bindings_Source { public $name; public $label; private $get_value_callback; public $uses_context = null; public function __construct( string $name, array $source_properties ) { $this->name = $name; foreach ( $source_properties as $property_name => $property_value ) { $this->$property_name = $property_value; } } public function get_value( array $source_args, $block_instance, string $attribute_name ) { return call_user_func_array( $this->get_value_callback, array( $source_args, $block_instance, $attribute_name ) ); } public function __wakeup() { throw new \LogicException( __CLASS__ . ' should never be unserialized' ); } } 