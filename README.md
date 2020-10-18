# random-image
a random image viewer

## 两种使用方式
   1. 访问`index.php`(your-domian/)随机浏览图片
   2. 访问`api.php`(your_domain/api.php)返回一个图片的地址，可用于博客、网站背景等
   
## 使用说明
   - 图片放在img文件夹下，后缀可以是jpg,png,jpeg。小写大写后缀都可以。
   - 或者你也可以使用软链接`ln -s path/to/your/images /path/to/random-image/img`
   - 直接引用`<img src="http://your_domain/api.php">`
