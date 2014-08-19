<?php
/*
 * 本类统一使用本地地址格式，不同环境下会自动转换。另外SAE环境下可以直接使用Storage地址。
*/
namespace My;
class FileUtil{
	static protected $handler;
	/*
	 * 连接文件系统，就是根据运行环境实例化相应的驱动
	 * @param string $type File或Sae，兼容本地和Sae环境
     * @return viod
	*/
	static public function connect($type='File') {
		$class  =   '\\My\\FileUtil\\Driver\\'.ucwords($type);
		self::$handler = new $class();
	}
	/*
	 * 删除指定文件
	 * @param string $aimUrl 要删除的文件地址。
     * @return boolen
	*/
	static public function unlinkFile($aimUrl){
		return self::$handler->unlinkFile($aimUrl);
	}
	/*
	 * 移动指定文件
	 * @param string $fileUrl 要移动的文件地址。
	 * @param string $aimUrl 移动后的新地址。
	 * @param boolen $overWrite 是否覆盖已存在的文件。
     * @return boolen
	*/
	static public function moveFile($fileUrl, $aimUrl, $overWrite = true){
		return self::$handler->moveFile($fileUrl, $aimUrl, $overWrite);
	}
	/*
	 * 获取目录下子目录及文件列表
	 * @param string $dirUrl 要扫描的目录地址。
     * @return array
	*/
	static public function getList($dirUrl){
		return self::$handler->getList($dirUrl);
	}
	/*
	 * 清空目录
	 * @param string $dirUrl 要清空的目录地址。
     * @return boolen
	*/
	static public function clearDir($dirUrl){
		return self::$handler->clearDir($dirUrl);
	}
	/*
	 * 删除目录
	 * @param string $dirUrl 要删除的目录地址。
     * @return boolen
	*/
	static public function unlinkDir($dirUrl){
		return self::$handler->unlinkDir($dirUrl);
	}
	/*
	 * 读取文件
	 * @param string $fileUrl 要读取的文件地址。
     * @return 成功返回文件内容，失败返回FALSE
	*/
	static public function readFile($fileUrl){
		return self::$handler->readFile($fileUrl);
	}
	/*
	 * 写入文件
	 * @param string $fileUrl 要写入的文件地址。
	 * @param string $content 写入内容
     * @return 成功返回文件地址，失败返回FALSE
	*/
	static public function writeFile($fileUrl,$content){
		return self::$handler->writeFile($fileUrl,$content);
	}
	/*
	 * 将本地地址转换为当前环境地址
	 * @param string $url 要转换的地址。
     * @return string
	*/
	static public function encodeUrl($url){
		return self::$handler->encodeUrl($url);
	}
	/*
	 * 将当前环境地址转换为本地地址
	 * @param string $url 要转换的地址。
     * @return string
	*/
	static public function decodeUrl($url){
		return self::$handler->decodeUrl($url);
	}
	/*
	 * 判断文件是否存在（不能用于判断目录）
	 * @param string $fileUrl 要判断的文件地址。
     * @return boolen
	*/
	static public function fileExists($fileUrl){
		return self::$handler->fileExists($fileUrl);
	}
}