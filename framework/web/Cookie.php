<?php
/**
 * Cookie class file.
 *
 * @link http://www.yiiframework.com/
 * @copyright Copyright &copy; 2008-2012 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

/**
 * Cookie represents information related with a cookie, such as [[name]], [[value]], [[domain]], etc.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class Cookie extends \yii\base\Object
{
	/**
	 * @var string name of the cookie
	 */
	public $name;
	/**
	 * @var string value of the cookie
	 */
	public $value = '';
	/**
	 * @var string domain of the cookie
	 */
	public $domain = '';
	/**
	 * @var integer the timestamp at which the cookie expires. This is the server timestamp.
	 * Defaults to 0, meaning "until the browser is closed".
	 */
	public $expire = 0;
	/**
	 * @var string the path on the server in which the cookie will be available on. The default is '/'.
	 */
	public $path = '/';
	/**
	 * @var boolean whether cookie should be sent via secure connection
	 */
	public $secure = false;
	/**
	 * @var boolean whether the cookie should be accessible only through the HTTP protocol.
	 * By setting this property to true, the cookie will not be accessible by scripting languages,
	 * such as JavaScript, which can effectively help to reduce identity theft through XSS attacks.
	 */
	public $httpOnly = false;

	/**
	 * Constructor.
	 * @param string $name name of this cookie
	 * @param string $value value of this cookie
	 * @param array $config name-value pairs that will be used to initialize the object properties
	 */
	public function __construct($name, $value, $config = array())
	{
		$this->name = $name;
		$this->value = $value;
		parent::__construct($config);
	}
}
