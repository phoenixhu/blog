EG-Blog管理系统
===============

EG-Blog是一款简单优雅的文章管理系统，采用`thinkphp5.0`框架编写，前端采用`bootstrap`框架，
这个项目是作者根据一些教程和文档开发出来的，所以很多功能都不是很完善或者存在某些bug，请多多赐教！

![Image text](https://raw.githubusercontent.com/phoenixhu/blog/master/public/static/index/images/%E4%B8%BB%E9%A1%B5.png)

![Image text](https://raw.githubusercontent.com/phoenixhu/blog/master/public/static/index/images/%E6%96%87%E7%AB%A0%E9%A1%B5%E9%9D%A2.png)

![Image text](https://raw.githubusercontent.com/phoenixhu/blog/master/public/static/index/images/%E5%90%8E%E5%8F%B0.png)

## 目录结构

重要目录结构如下：

~~~
www  WEB部署目录（或者子目录）
─application                   应用目录
│  │  common.php               公共函数文件
│  │  config.php               公共配置文件
│  │  database.php             数据库配置文件
│  │  route.php                路由配置文件
│  │
│  ├─admin                     后台模块
│  │  │  common.php            模块函数文件
│  │  │  config.php            模块配置文件
│  │  │
│  │  ├─controller             后台控制器
│  │  │      Admin.php         管理员
│  │  │      Article.php       文章
│  │  │      Base.php          判断是否登录
│  │  │      Cate.php          栏目
│  │  │      Index.php         后台主页
│  │  │      Links.php         链接
│  │  │      Login.php         登录
│  │  │      Logo.php          logo
│  │  │      Tags.php          热门标签
│  │  │
│  │  ├─model                  后台模型
│  │  │      Admin.php
│  │  │      Article.php
│  │  │      Cate.php
│  │  │      Links.php
│  │  │
│  │  ├─validate               后台验证器
│  │  │      Admin.php
│  │  │      Article.php
│  │  │      Cate.php
│  │  │      Links.php
│  │  │      Logo.php
│  │  │      Tags.php
│  │  │
│  │  └─view                   后台模板
│  │      ├─admin
│  │      │      add.htm
│  │      │      edit.htm
│  │      │      list.htm
│  │      │
│  │      ├─article
│  │      │      add.htm
│  │      │      edit.htm
│  │      │      list.htm
│  │      │
│  │      ├─cate
│  │      │      add.htm
│  │      │      edit.htm
│  │      │      list.htm
│  │      │
│  │      ├─common
│  │      │      left.htm
│  │      │      top.htm
│  │      │
│  │      ├─index
│  │      │      index.htm
│  │      │
│  │      ├─links
│  │      │      add.htm
│  │      │      edit.htm
│  │      │      list.htm
│  │      │
│  │      ├─login
│  │      │      login.htm
│  │      │
│  │      ├─logo
│  │      │      index.htm
│  │      │
│  │      └─tags
│  │              add.htm
│  │              edit.htm
│  │              list.htm
│  │
│  └─index                     前台模板
│      │  common.php           前台函数文件
│      │  config.php           前台配置文件
│      │
│      ├─controller            前台控制器
│      │      Article.php      文章
│      │      Base.php         公共及右侧
│      │      Cate.php         栏目
│      │      Index.php        主页
│      │      Search.php       查询
│      │
│      └─view                  前台模板
│          ├─article
│          │      article.html
│          │
│          ├─cate
│          │      cate.html
│          │
│          ├─common
│          │      foot.html
│          │      header.html
│          │      right.html
│          │
│          ├─index
│          │      index.html
│          │
│          └─search
│                  search.html
~~~

## 安装和演示
* 安装：导入根目录下的`blog.sql`文件，然后修改application/database.php文件中的数据库信息；
* 后台登录地址：http://域名/admin/login
* 账号密码：admin admin
* 演示：http://blog.geiliwu.cn