# wzhn
沸点工作室“玩转华农”应用

### 开发、测试环境

在本地进行开发测试时，请配置一个虚拟主机（Virtual Host）环境，以免部署到生产环境时频繁地修改配置文件。

配置简单步骤：

1、打开Apache配置文件httpd.conf，找到：

```
# Virtual hosts
Include conf/extra/httpd-vhosts.conf
```

将include那行的#符号去掉，使虚拟主机配置生效。

（使用wamp集成环境时，该文件一般在 wamp/bin/apache2.x.x/conf文件夹中）

2、可以根据上一点的include路径，找到 extra 文件夹下的httpd-vhosts.conf文件。根据你的情况，添加一项虚拟主机配置：

```
<VirtualHost *:80>
    ServerAdmin webmaster@your_domain
    DocumentRoot "your\path\to\wzhn"
    ServerName your_domain
    ErrorLog "logs/yourdomain-error.log"
    CustomLog "logs/yourdomain-access.log" common
</VirtualHost>
```

以上示例项中，your_domain可以任意改成你想到的主机名。

3、找到你的计算机的hosts文件，最后添加一行：

```
127.0.0.1	your_domain
```

4、重启你的Apache服务。接着在浏览器中输入 http://your_domain，即可测试本仓库的代码。
