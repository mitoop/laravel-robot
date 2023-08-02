<h1 align="center">Laravel Robot</h1>

## 环境需求
- Laravel >= 6

## 安装
```shell
composer require mitoop/laravel-robot
```

## 使用
#### 发布配置文件
```shell
php artisan vendor:publish --provider="Mitoop\LaravelRobot\ServiceProvider"
```

配置参考: [`mitoop/robot`](https://github.com/mitoop/robot)

#### Facade
```php
\Robot::sendTextMsg('debug', [ 'foo' => 'bar' ]);

\Robot::sendMarkdownMsg('### Markdown');
```

