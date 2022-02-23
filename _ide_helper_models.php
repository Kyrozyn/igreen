<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\FrontMenu
 *
 * @property int $id
 * @property string $name
 * @property string|null $icon_url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FrontMenu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FrontMenu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FrontMenu query()
 * @method static \Illuminate\Database\Eloquent\Builder|FrontMenu whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontMenu whereIconUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontMenu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontMenu whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontMenu whereUpdatedAt($value)
 */
	class FrontMenu extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Laporan
 *
 * @property int $id
 * @property int|null $menu_id
 * @property string $name
 * @property string|null $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Menu|null $menu
 * @method static \Illuminate\Database\Eloquent\Builder|Laporan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Laporan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Laporan query()
 * @method static \Illuminate\Database\Eloquent\Builder|Laporan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laporan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laporan whereMenuId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laporan whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laporan whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laporan whereUpdatedAt($value)
 */
	class Laporan extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\LaporanUser
 *
 * @property int $id
 * @property int $user_id
 * @property string $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|LaporanUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LaporanUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LaporanUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|LaporanUser whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LaporanUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LaporanUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LaporanUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LaporanUser whereUserId($value)
 */
	class LaporanUser extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Menu
 *
 * @property int $id
 * @property string $id_menu
 * @property string $name
 * @property int $front_menu_id
 * @property int|null $parent_menu
 * @property string|null $schedule
 * @property int $have_submenu
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Laporan[] $laporan
 * @property-read int|null $laporan_count
 * @method static \Illuminate\Database\Eloquent\Builder|Menu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Menu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Menu query()
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereFrontMenuId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereHaveSubmenu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereIdMenu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereParentMenu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereSchedule($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereUpdatedAt($value)
 */
	class Menu extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\LaporanUser[] $laporanuser
 * @property-read int|null $laporanuser_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

