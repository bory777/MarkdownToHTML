# MarkdownToHTML

MarkdownToHTMLは、Markdown形式のテキストをHTMLに変換するWebアプリケーションです。このプロジェクトでは、Monaco Editorを使用してMarkdownを編集し、リアルタイムでHTMLに変換・プレビュー・ダウンロードする機能を提供します。

## 特徴

- **リアルタイムプレビュー**: Markdownを編集すると、対応するHTMLがリアルタイムでプレビューされます。
- **HTML表示**: 編集したMarkdownをHTMLに変換して表示します。
- **HTMLダウンロード**: 変換したHTMLをファイルとしてダウンロードできます。

## セットアップ

このプロジェクトをローカル環境で動かすための手順です。

### 必要条件

- PHP 7.4以降
- Composer
- Node.js & npm (必要に応じて)

### 手順

1. **リポジトリのクローン**

    ```bash
    git clone https://github.com/your-username/MarkdownToHTML.git
    cd MarkdownToHTML
    ```

2. **Composerのインストール**

    リポジトリ内に`composer.json`ファイルがある場合は、依存関係をインストールします。

    ```bash
    composer install
    ```

3. **必要な依存パッケージのインストール (必要に応じて)**

    必要であれば、npmを使って追加のJavaScriptパッケージをインストールします。

    ```bash
    npm install
    ```

4. **PHPビルトインサーバーを使用したローカルサーバーの起動**

    PHPのビルトインサーバーを使用して、プロジェクトをローカルで実行します。

    ```bash
    php -S localhost:8000
    ```

5. **ブラウザでアクセス**

    ブラウザを開き、以下のURLにアクセスします。

    ```bash
    http://localhost:8000
    ```

## 使用方法

1. **Markdownの編集**

    画面左側のMonaco EditorにMarkdownを入力します。

2. **プレビュー**

    `Preview`ボタンをクリックすると、入力したMarkdownがリアルタイムで右側にHTMLとしてプレビューされます。

3. **HTML表示**

    `HTML`ボタンをクリックすると、編集したMarkdownがHTMLコードとして右側に表示されます。

4. **HTMLのダウンロード**

    `Download`ボタンをクリックすると、変換されたHTMLをファイルとしてダウンロードできます。

## ファイル構成

- **index.html**: メインのHTMLファイル。UIが定義されています。
- **app.js**: メインのJavaScriptファイル。Monaco Editorの初期化、Markdownのパース、HTML変換、ダウンロード機能が含まれています。
- **style.css**: カスタムスタイルシート。
- **parse.php**: サーバーサイドでMarkdownをHTMLに変換するためのPHPスクリプト。
- **download.php**: 生成されたHTMLをダウンロードするためのPHPスクリプト。

## 開発者向け

### コードの構成

- `Monaco Editor`を使用して、Markdownの編集を行います。
- JavaScriptを使って、リアルタイムプレビューやHTMLの変換を行います。
- PHPを使用して、サーバーサイドでのMarkdown処理やHTMLファイルのダウンロード機能を提供します。



