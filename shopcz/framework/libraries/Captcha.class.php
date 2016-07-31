<?php
/**
 *================================================================== 
 * captcha.class.php 验证码类，生成验证码
 * @author 王超平
 * @copyright 传智播客PHP学院 2006-2013
 * @version 1.0
 * 2013年3月25日16:33:34 
 *=================================================================
 */
class Captcha{
	private $num;     // 验证码字符个数
	private $width;   // 验证码图片宽度
	private $height;  // 验证码图片高度
	private $code;    //验证码字符串
	private $image;   // 画布资源
	private $fontsize;  //验证码字体大小
	private $font;      //验证码字体文件


	public function __construct($num = 4, $width = 70, $height = 25,$fontsize=5,$font=''){
		$this->num = $num;
		$this->width = $width;
		$this->height = $height;
		$this->fontsize = $fontsize;
		$this->font = $font;
		$this->randCode();
	}

	/**
	 * 生成带有验证码的图片
	 */
	public function generateCode(){
		$this->createImage();
		$this->outputText();
		$this->setDisturb();
		$this->outputImage();
	}

	/**
	 * 创建画布资源
	 */
	private function createImage(){
		$this->image = imagecreatetruecolor($this->width, $this->height);
		$fillcolor = imagecolorallocate($this->image, 255, 255, 255);
		$bordercolor = imagecolorallocate($this->image, 0, 0, 0);
		imagefill($this->image, 0, 0, $fillcolor);
		imagerectangle($this->image, 0, 0, $this->width-1, $this->height-1, $bordercolor);
	}

	/**
	 * 生成随机字符串
	 */
	private function randCode(){
		for ($i=0; $i < $this->num; $i++) {
			$number = ''; 
			$rand = rand(1,3);
			switch ($rand) {
				case 1:
					$number = rand(48,57);  //生成48-57之间的一个任意数，其对应的字符为0-9
					break;
				case 2:
					$number = rand(65,90);  //生成65-90之间的一个任意数，其对应的字符为A-Z
					break;
				case 3:
					$number = rand(97,122); //生成97-122之间的一个任意数，其对应的字符为a-z
				default:
					break;
			}
			$this->code .= chr($number);  //将随机生成的数值（ascii码）转成成对应的字符，并存入到code中
		}
	}

	/**
	 * 添加干扰元素 
	 */
	private function setDisturb(){
		for ($i=0; $i < 80; $i++) { 
			$x = rand(0,$this->width);
			$y = rand(0,$this->height);
			$color = imagecolorallocate($this->image, rand(0,200), rand(0,200), rand(0,200));
			imagesetpixel($this->image, $x, $y, $color);
		}
	}

	/**
	 * 将字符串写到画布上
	 */
	private function outputText(){
		for ($i=0; $i < $this->num ; $i++) { 
			//随机颜色，随机位置
			$color = imagecolorallocate($this->image, rand(0,200), rand(0,200), rand(0,200));
			$x = $i * ($this->width / $this->num) + 5;
			if ($this->font) {
				# 使用指定的字体
				$y = rand($this->height -7, $this->height-2);
				imagettftext($this->image, $this->fontsize, 0, $x, $y, $color, $this->font, $this->code[$i]);
			} else {
				# 没有指定字体，则使用imagestring函数
				$y = rand(5,$this->height / 3);
				imagestring($this->image, $this->fontsize, $x, $y, $this->code[$i], $color);
			}		
		}	
	}

	/**
	 * 输出验证码图片
	 */
	private function outputImage(){
		if (imagetypes() & IMG_PNG) {
			# code...
			header("Content-Type:image/png");
			imagepng($this->image);
		} elseif (imagetypes() & IMG_JPG) {
			# code...
			header("Content-Type:image/jpeg");
			imagejpeg($this->image);
		} elseif (imagetypes() & IMG_GIF) {
			# code...
			header("Content-Type:image/gif");
			imagegif($this->image);
		} elseif (imagetypes() & IMG_WBMP) {
			# code...
			header("Content-Type:image/wbmp");
			imagewbmp($this->image);
		} else {
			die('你的PHP版本不支持图像');
		}
		
	}

	/**
	 * 获取验证码字符串
	 */
	public function getCode(){
		return $this->code;
	}

}

//调用实例
//$c = new captcha(4,90,30,20,'msyh.ttf');
//$d = new captcha();

//$c->generateCode();
//$d->generateCode();
//echo $c->getCode();