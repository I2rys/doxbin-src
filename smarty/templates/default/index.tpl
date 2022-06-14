    <div class="col-md-12" style="margin-top: 10px;">
        <div class="col-md-12" style="margin-top: 100px;">
            <div align="center">
                <p>Showing {$doxCount} doxe(s)</p>
            </div>
        </div>

        <div class="col-md-6 col-md-offset-3">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th class="text-center">Views</th>
                        <th class="text-center">Added</th>
                        <th class="text-center">RAW</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$doxList item=dox}
                      <tr class="doxentry">
                        <td><a href="upload/{$dox.id}">{$dox.title}</a></td>
                        <td class="text-center">{$dox.views}</td>
                        <td class="text-center">{$dox.date}</td>
                        <td class="text-center"><a href="upload/{$dox.id}/raw">RAW</a></td>
                      </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>