<?php
namespace CakeDC\Users\Auth\Social\Mapper;

use Cake\Utility\Hash;

/**
 * Facebook Mapper
 *
 */
class Facebook extends AbstractMapper
{

    /**
     * Url constants
     */
    const FB_GRAPH_BASE_URL = 'https://graph.facebook.com/';

    /**
     * Map for provider fields
     * @var
     */
    protected $_mapFields = [
        'full_name' => 'name',
    ];

    /**
     * Get avatar url
     * @return string
     */
    protected function _avatar()
    {
        return self::FB_GRAPH_BASE_URL . Hash::get($this->_rawData, 'id') . '/picture?type=large';
    }
    
    /**
     * @return string
     */
    protected function _link()
    {
        return Hash::get($this->_rawData, 'link') ?: '#';
    }
}
