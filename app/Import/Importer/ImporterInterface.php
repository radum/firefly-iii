<?php
/**
 * ImporterInterface.php
 * Copyright (C) 2016 thegrumpydictator@gmail.com
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

declare(strict_types = 1);

namespace FireflyIII\Import\Importer;

use FireflyIII\Import\Role\Map;
use FireflyIII\Models\ImportJob;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\FileBag;

/**
 * Interface ImporterInterface
 *
 * @package FireflyIII\Import\Importer
 */
interface ImporterInterface
{

    /**
     * Run the actual import
     *
     * @return bool
     */
    public function start(): bool;

    /**
     * After uploading, and after setJob(), prepare anything that is
     * necessary for the configure() line.
     *
     * @return bool
     */
    public function configure(): bool;

    /**
     * Returns any data necessary to do the configuration.
     *
     * @return array
     */
    public function getConfigurationData(): array;

    /**
     * This method returns the data required for the view that will let the user add settings to the import job.
     *
     * @return array
     */
    public function getDataForSettings(): array;

    /**
     * Store the settings filled in by the user, if applicable.
     * 
     * @param Request $request
     *
     */
    public function storeSettings(Request $request);

    /**
     * This method returns the name of the view that will be shown to the user to further configure
     * the import job.
     *
     * @return string
     */
    public function getViewForSettings(): string;

    /**
     * This method returns whether or not the user must configure this import
     * job further.
     *
     * @return bool
     */
    public function requireUserSettings(): bool;

    /**
     * @param array $data
     *
     * @return bool
     */
    public function saveImportConfiguration(array $data, FileBag $files): bool;

    /**
     * @param ImportJob $job
     *
     */
    public function setJob(ImportJob $job);
}