<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

class Google_Service_Compute_ProjectsEnableXpnResourceRequest extends Google_Model
{
  protected $xpnResourceType = 'Google_Service_Compute_XpnResourceId';
  protected $xpnResourceDataType = '';

  public function setXpnResource(Google_Service_Compute_XpnResourceId $xpnResource)
  {
    $this->xpnResource = $xpnResource;
  }
  public function getXpnResource()
  {
    return $this->xpnResource;
  }
}