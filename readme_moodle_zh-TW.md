# 安裝或更新第三方庫
## Composer 依賴
該插件使用 Composer 來處理依賴關係。 
有關在電腦上安裝 Composer 的說明，請參閱：https://getcomposer.org/doc/00-intro.md

### 刷新當前版本
1. 按照 getcomposer 中的說明全局安裝 Composer。
2. 在插件目錄中，運行：
   1. `composer update`
   2. `composer install`
3. 檢查`vendor`目錄中的文件是否已更新

### 更新到更高版本
所依賴項的版本的管理通常都在`composer.json`中定義!

要安裝更高版本的庫，請按照下列步驟操作：
  1. 在composer.json中更改所需庫的版本號
  2. 按照 getcomposer 中的說明全局安裝 Composer
  3. 在插件目錄中，運行：
     1. `composer update`
     2. `composer install`
  4. 檢查`vendor`目錄中的文件是否已更新