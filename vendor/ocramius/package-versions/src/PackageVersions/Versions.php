<?php

declare(strict_types=1);

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = '__root__';
    public const VERSIONS          = array (
  'api-platform/api-pack' => 'v1.2.1@41364f8763475d7709c43f790aa77a4157d038e2',
  'api-platform/core' => 'v2.5.3@2d402688c485457adbc771e347e6498e70c6f232',
  'doctrine/annotations' => 'v1.8.0@904dca4eb10715b92569fbcd79e201d5c349b6bc',
  'doctrine/cache' => '1.10.0@382e7f4db9a12dc6c19431743a2b096041bcdd62',
  'doctrine/collections' => '1.6.4@6b1e4b2b66f6d6e49983cebfe23a21b7ccc5b0d7',
  'doctrine/common' => 'v2.11.0@b8ca1dcf6b0dc8a2af7a09baac8d0c48345df4ff',
  'doctrine/dbal' => 'v2.10.0@0c9a646775ef549eb0a213a4f9bd4381d9b4d934',
  'doctrine/doctrine-bundle' => '2.0.6@0ef972d3b730f975c80db9fffa4b2a0258c91442',
  'doctrine/doctrine-migrations-bundle' => '2.1.2@856437e8de96a70233e1f0cc2352fc8dd15a899d',
  'doctrine/event-manager' => '1.1.0@629572819973f13486371cb611386eb17851e85c',
  'doctrine/inflector' => '1.3.1@ec3a55242203ffa6a4b27c58176da97ff0a7aec1',
  'doctrine/instantiator' => '1.3.0@ae466f726242e637cebdd526a7d991b9433bacf1',
  'doctrine/lexer' => '1.2.0@5242d66dbeb21a30dd8a3e66bf7a73b66e05e1f6',
  'doctrine/migrations' => '2.2.0@8e124252d2f6be1124017d746d5994dd4095d66f',
  'doctrine/orm' => 'v2.7.0@4d763ca4c925f647b248b9fa01b5f47aa3685d62',
  'doctrine/persistence' => '1.3.3@99b196bbd4715a94fa100fac664a351ffa46d6a5',
  'doctrine/reflection' => 'v1.0.0@02538d3f95e88eb397a5f86274deb2c6175c2ab6',
  'fig/link-util' => '1.1.0@47f55860678a9e202206047bc02767556d298106',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'lcobucci/jwt' => '3.3.1@a11ec5f4b4d75d1fcd04e133dede4c317aac9e18',
  'lexik/jwt-authentication-bundle' => 'v2.6.5@448551fc08c6cff37aad9d8f27f6b9615cd28966',
  'namshi/jose' => '7.2.3@89a24d7eb3040e285dd5925fcad992378b82bcff',
  'nelmio/cors-bundle' => '2.0.1@9683e6d30d000ef998919261329d825de7c53499',
  'ocramius/package-versions' => '1.4.2@44af6f3a2e2e04f2af46bcb302ad9600cba41c7d',
  'ocramius/proxy-manager' => '2.2.3@4d154742e31c35137d5374c998e8f86b54db2e2f',
  'phpdocumentor/reflection-common' => '2.0.0@63a995caa1ca9e5590304cd845c15ad6d482a62a',
  'phpdocumentor/reflection-docblock' => '4.3.4@da3fd972d6bafd628114f7e7e036f45944b62e9c',
  'phpdocumentor/type-resolver' => '1.0.1@2e32a6d48972b2c1976ed5d8967145b6cec4a4a9',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.2@446d54b4cb6bf489fc9d75f55843658e6f25d801',
  'symfony/asset' => 'v4.3.9@3f97e57596884f7b9158d564a533112a0d19dbdd',
  'symfony/cache' => 'v4.3.9@2a7bcc592adcaab9efc165bbced5a91fe905fad4',
  'symfony/cache-contracts' => 'v1.1.7@af50d14ada9e4e82cfabfabdc502d144f89be0a1',
  'symfony/config' => 'v4.3.9@9822766942cc233363ba573675f0b3d7283b0bc6',
  'symfony/console' => 'v4.3.9@92e3577f4310553c83e362db25cc73f9673217de',
  'symfony/debug' => 'v4.3.9@7793eea884aae3f1ba339ed8990b65d67c0b4075',
  'symfony/dependency-injection' => 'v4.3.9@27d8bf5aebc3d4c7bfa95e23025ecdfb3637a27d',
  'symfony/doctrine-bridge' => 'v4.3.9@81e2dff413f9d51e1ef3d8552ef7d773973d7b37',
  'symfony/dotenv' => 'v4.3.9@62d93bf07edd0d76f033d65a7fd1c1ce50d28b50',
  'symfony/event-dispatcher' => 'v4.3.9@87a1ae7480f2020818013605a65776b9033bcc4f',
  'symfony/event-dispatcher-contracts' => 'v1.1.7@c43ab685673fb6c8d84220c77897b1d6cdbe1d18',
  'symfony/expression-language' => 'v4.3.9@d81f0eb914f534e8b17a9db8c2408d1f0cf55fd2',
  'symfony/filesystem' => 'v4.3.9@33301491743c72740069fd61ee0b9e6b24b0fb97',
  'symfony/finder' => 'v4.3.9@3d72a13a7edcffecc73151821eb75c57e9214e00',
  'symfony/flex' => 'v1.6.0@952f45d1c5077e658cb16a61d11603bee873f968',
  'symfony/framework-bundle' => 'v4.3.9@39fa21a555c5b451222b37d59925f5d4704ba0c0',
  'symfony/http-foundation' => 'v4.3.9@fcafc7c53784919e4bbcb6d5df73cabbb5c39e76',
  'symfony/http-kernel' => 'v4.3.9@3feb99b01560f94173d8fbc5a203ea497d01d499',
  'symfony/inflector' => 'v4.3.9@f97c69c132c08e31d291689d2d77bb0878094acb',
  'symfony/mime' => 'v4.3.9@22aecf6b11638ef378fab25d6c5a2da8a31a1448',
  'symfony/orm-pack' => 'v1.0.7@c57f5e05232ca40626eb9fa52a32bc8565e9231c',
  'symfony/polyfill-intl-idn' => 'v1.13.1@6f9c239e61e1b0c9229a28ff89a812dc449c3d46',
  'symfony/polyfill-mbstring' => 'v1.13.1@7b4aab9743c30be783b73de055d24a39cf4b954f',
  'symfony/polyfill-php72' => 'v1.13.1@66fea50f6cb37a35eea048d75a7d99a45b586038',
  'symfony/polyfill-php73' => 'v1.13.1@4b0e2222c55a25b4541305a053013d5647d3a25f',
  'symfony/property-access' => 'v4.3.9@2abd699fca214838afdd151fd2a2f8a8b07a738a',
  'symfony/property-info' => 'v4.3.9@460242fd0696f3a4a8a7f6e4105b832557960c3b',
  'symfony/routing' => 'v4.3.9@a252cd9441a00e71b52a28838cbd14115795a725',
  'symfony/security-bundle' => 'v4.3.9@8d157b5a96c2d7561e29eca3574344727482d3fb',
  'symfony/security-core' => 'v4.3.9@8c46ea77fe0738f2495eacc08fa34e1e19ff0b0d',
  'symfony/security-csrf' => 'v4.3.9@0760ec651ea8ff81e22097780337e43f3a795769',
  'symfony/security-guard' => 'v4.3.9@62cc82a384f2c1c75c58189fcf713032f6fef1e9',
  'symfony/security-http' => 'v4.3.9@75e96df3a1b9b38c67e2fa208894f72dae5e1147',
  'symfony/serializer' => 'v4.3.9@12ce178feef47bed8316cc48e68892f9a34c0794',
  'symfony/service-contracts' => 'v1.1.8@ffc7f5692092df31515df2a5ecf3b7302b3ddacf',
  'symfony/stopwatch' => 'v4.3.9@e96c259de6abcd0cead71f0bf4d730d53ee464d0',
  'symfony/translation-contracts' => 'v1.1.7@364518c132c95642e530d9b2d217acbc2ccac3e6',
  'symfony/twig-bridge' => 'v4.3.9@29a701da694fec427c8b3a3d32ef99766e506aaf',
  'symfony/twig-bundle' => 'v4.3.9@869ebf144acafd19fb9c8c386808c26624f28572',
  'symfony/validator' => 'v4.3.9@539484217f9966aa93e01915c5035c74b6ea1b9b',
  'symfony/var-exporter' => 'v4.3.9@8cccc7d4fde4d72d0bf9d70f01ffa3ba1ec3510b',
  'symfony/web-link' => 'v4.3.9@4bd0ce7c54d604300deee8eb1b1beda856fbba20',
  'symfony/yaml' => 'v4.3.9@324cf4b19c345465fad14f3602050519e09e361d',
  'twig/twig' => 'v2.12.3@97b6311585cae66a26833b14b33785f5797f7d39',
  'webmozart/assert' => '1.6.0@573381c0a64f155a0d9a23f4b0c797194805b925',
  'willdurand/negotiation' => 'v2.3.1@03436ededa67c6e83b9b12defac15384cb399dc9',
  'zendframework/zend-code' => '3.4.1@268040548f92c2bfcba164421c1add2ba43abaaa',
  'zendframework/zend-eventmanager' => '3.2.1@a5e2583a211f73604691586b8406ff7296a946dd',
  'doctrine/data-fixtures' => '1.4.0@608a35a3b5bcc4214d116603095f8b0c51091592',
  'doctrine/doctrine-fixtures-bundle' => '3.3.0@8f07fcfdac7f3591f3c4bf13a50cbae05f65ed70',
  'nikic/php-parser' => 'v4.3.0@9a9981c347c5c49d6dfe5cf826bb882b824080dc',
  'symfony/maker-bundle' => 'v1.14.3@c864e7f9b8d1e1f5f60acc3beda11299f637aded',
  'symfony/process' => 'v4.3.9@207dab1f17d34ad71ea72e9741ab8049a9d8251b',
  'symfony/web-server-bundle' => 'v4.3.9@cf3172e6c3a1c996058b377cc92011b747607184',
  'paragonie/random_compat' => '2.*@47955823f175b8d15094ae23ebc6c0c95a131eb1',
  'symfony/polyfill-ctype' => '*@47955823f175b8d15094ae23ebc6c0c95a131eb1',
  'symfony/polyfill-iconv' => '*@47955823f175b8d15094ae23ebc6c0c95a131eb1',
  'symfony/polyfill-php71' => '*@47955823f175b8d15094ae23ebc6c0c95a131eb1',
  'symfony/polyfill-php70' => '*@47955823f175b8d15094ae23ebc6c0c95a131eb1',
  'symfony/polyfill-php56' => '*@47955823f175b8d15094ae23ebc6c0c95a131eb1',
  '__root__' => 'dev-master@47955823f175b8d15094ae23ebc6c0c95a131eb1',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
