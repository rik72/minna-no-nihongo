<?
use App\Models\User;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('home', function (BreadcrumbTrail $trail): void {
    $trail->push('Home', route('home'));
});

Breadcrumbs::for('generator', function (BreadcrumbTrail $trail): void {
    $trail->push('Home', route('home'));
    $trail->push('Generator', route('generator'));
});