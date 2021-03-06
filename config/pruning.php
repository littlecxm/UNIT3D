<?php
/**
 * NOTICE OF LICENSE
 *
 * UNIT3D is open-sourced software licensed under the GNU General Public License v3.0
 * The details is bundled with this project in the file LICENSE.txt.
 *
 * @project    UNIT3D
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html/ GNU Affero General Public License v3.0
 * @author     HDVinnie
 */

return [

    /*
    |--------------------------------------------------------------------------
    | User Pruning
    |--------------------------------------------------------------------------
    | Users Account Must Be Atleast x Days Old
    | Users Last Login Atleast x Days Ago
    | Soft Delete Disabled Users After x Days (Pruned Group)
    | Groups That Can Be Auto Disabled [DEFAULT] (User, PowerUser, SuperUser, Leech)
    */
    'user_pruning' => false,
    'account_age' => 90,
    'last_login' => 90,
    'soft_delete' => 120,
    'group_ids' => [3, 11, 12, 15],
];
