<?php

declare(strict_types=1);
/**
 * @copyright Copyright (c) 2020, Roeland Jago Douma <roeland@famdouma.nl>
 *
 * @author Roeland Jago Douma <roeland@famdouma.nl>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OCP\Push;

/**
 * @since 20.0.0
 */
interface IManager {

	/**
	 * Register an access validator
	 *
	 * @param string $appId
	 * @param string $service
	 *
	 * @since 20.0.0
	 */
	public function registerAccesValidator(string $appId, string $service): void;

	/**
	 * Regsiter the app to handle the pushing
	 *
	 * @param string $service The service that will be invoked by quering the
	 * container. So DI should work for this class
	 */
	public function registerPushApp(string $service): void;
}