# cert_check

## これは何？

WEBブラウザから証明書の整合性を確認するツールです。

## 使い方

### apacheとphpをインストール

```
yum install httpd php

```

### ドキュメントルートに移動し、clone

```
cd /var/www/html
git clone https://github.com/keisukesanuki/cert_check.git
```

### 権限変更

```
mkdir cert_check/app/files
chown apache cert_check -R
```

### ブラウザから接続

http://ipアドレス/cert_check/
