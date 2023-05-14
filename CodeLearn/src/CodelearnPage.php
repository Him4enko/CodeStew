<?php
namespace CodeStew\CodeLearn;

use Flarum\Frontend\Document;
use Psr\Http\Message\ServerRequestInterface as Request;
use Flarum\Http\UrlGenerator;
class CodelearnPage
{
    /**
     * @var UrlGenerator
     */
    protected $url;

    /**
     * @param UrlGenerator $url
     */
    public function __construct(UrlGenerator $url)
    {
        $this->url = $url;
    }

    /**
     * @param Document $document
     * @param Request $request
     */
    public function __invoke(Document $document, Request $request)
    {
        // Получить текущего пользователя
        $actor = $request->getAttribute('actor');

        // Установить заголовок страницы
        $document->title = 'Code Learn';

        // Создать произвольное HTML-содержимое
        $html = '
            <div class="CodelearnPage">
                <h1>Привет, ' . $actor->username . '!</h1>
            </div>
        ';

        // Добавить HTML-содержимое в документ
        $document->content = $html;
    }
}
