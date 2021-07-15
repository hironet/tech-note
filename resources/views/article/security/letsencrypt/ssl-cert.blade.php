@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="list-box list-box-toc">
      <li><a href="#create">SSLサーバ証明書の作成</a></li>
      <li><a href="#update">SSLサーバ証明書の更新</a></li>
      <li><a href="#delete">SSLサーバ証明書の削除</a></li>
    </ul>
  </nav>
</header>
<h2 id="create" class="title">SSLサーバ証明書の作成</h2>
<p>1. 以下のコマンドを実行する。</p>
<pre class="code-block"><code class="shell"># /usr/bin/certbot certonly \
--manual \
--agree-tos \
--no-eff-email \
--manual-public-ip-logging-ok \
--preferred-challenges dns-01 \
--server https://acme-v02.api.letsencrypt.org/directory \
-d "[ドメイン名]" \
-d "*.[ドメイン名]" \
-m "[メールアドレス]"
Saving debug log to /var/log/letsencrypt/letsencrypt.log
Plugins selected: Authenticator manual, Installer None
Obtaining a new certificate
Performing the following challenges:
dns-01 challenge for investor-hiro.com

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
Please deploy a DNS TXT record under the name
_acme-challenge.[ドメイン名] with the following value:

UvOXzzLGnSPn7e4yUCn1BWJgdu5FETcK_q3qwZnLlbE

Before continuing, verify the record is deployed.
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
Press Enter to Continue
</code></pre>
<p>2. 出力メッセージに従って、DNSサーバにTXTレコードを登録する。</p>
<p>3. DNSサーバにTXTレコードが登録されたことを確認するため、以下のコマンドを実行する。</p>
<pre class="code-block"><code class="shell"># nslookup -type=txt _acme-challenge.[ドメイン名] 8.8.8.8</code></pre>
<p>4. <kbd>Enter</kbd>を押す。</p>
<pre class="code-block"><code class="shell">
Waiting for verification...
Cleaning up challenges

IMPORTANT NOTES:
 - Congratulations! Your certificate and chain have been saved at:
   /etc/letsencrypt/live/[ドメイン名]/fullchain.pem
   Your key file has been saved at:
   /etc/letsencrypt/live/[ドメイン名]/privkey.pem
   Your cert will expire on 2021-08-06. To obtain a new or tweaked
   version of this certificate in the future, simply run certbot
   again. To non-interactively renew *all* of your certificates, run
   "certbot renew"
 - If you like Certbot, please consider supporting our work by:

   Donating to ISRG / Let's Encrypt:   https://letsencrypt.org/donate
   Donating to EFF:                    https://eff.org/donate-le</code></pre>
<p>5. <code>Congratulations!</code>と出力されたことを確認する。</p>
<p>6. DNSサーバからTXTレコードを削除する。</p>
<p>7. DNSサーバからTXTレコードが削除されたことを確認するため、以下のコマンドを実行する。</p>
<pre class="code-block"><code class="shell"># nslookup -type=txt _acme-challenge.[ドメイン名] 8.8.8.8</code></pre>
<p>8. Webサーバに設定ファイルを再読み込みさせる。</p>
<h2 id="update" class="title">SSLサーバ証明書の更新</h2>
<p>1. 以下のコマンドを実行する。</p>
<pre class="code-block"><code class="shell"># /usr/bin/certbot renew \
--manual \
--agree-tos \
--no-eff-email \
--manual-public-ip-logging-ok \
--preferred-challenges dns-01 \
--server https://acme-v02.api.letsencrypt.org/directory \
-m "[メールアドレス]"</code></pre>
<p>2. 出力メッセージに従って、DNSサーバにTXTレコードを登録する。</p>
<p>3. DNSサーバにTXTレコードが登録されたことを確認するため、以下のコマンドを実行する。</p>
<pre class="code-block"><code class="shell"># nslookup -type=txt _acme-challenge.[ドメイン名] 8.8.8.8</code></pre>
<p>4. <kbd>Enter</kbd>を押す。</p>
<p>5. <code>Congratulations!</code>と出力されたことを確認する。</p>
<p>6. DNSサーバからTXTレコードを削除する。</p>
<p>7. DNSサーバからTXTレコードが削除されたことを確認するため、以下のコマンドを実行する。</p>
<pre class="code-block"><code class="shell"># nslookup -type=txt _acme-challenge.[ドメイン名] 8.8.8.8</code></pre>
<p>8. Webサーバに設定ファイルを再読み込みさせる。</p>
<h2 id="delete" class="title">SSLサーバ証明書の削除</h2>
<p>1. 以下のコマンドを実行する。</p>
<pre class="code-block"><code class="shell"># certbot revoke --cert-path /etc/letsencrypt/live/[ドメイン名]/cert.pem
Saving debug log to /var/log/letsencrypt/letsencrypt.log

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
Would you like to delete the cert(s) you just revoked, along with all earlier
and later versions of the cert?
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
(Y)es (recommended)/(N)o:
</code></pre>
<p>2. <code>Y</code>を入力し、<kbd>Enter</kbd>を押す。</p>
<pre class="code-block"><code class="shell">(Y)es (recommended)/(N)o: Y

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
Deleted all files relating to certificate investor-hiro.com.
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
Congratulations! You have successfully revoked the certificate that was located
at /etc/letsencrypt/live/[ドメイン名]/cert.pem

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</code></pre>
<p>3. <code>Congratulations!</code>と出力されたことを確認する。</p>
<p>4. Webサーバに設定ファイルを再読み込みさせる。</p>
@endsection
