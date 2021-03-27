<ul>
  <li>公開日：
    <time itemprop="datePublished" datetime="<?= get_time_iso8601($ptime) ?>">
      <?= get_date_jp($ptime), PHP_EOL ?>
    </time>
  </li>
  <li>更新日：
    <time itemprop="dateModified" datetime="<?= get_time_iso8601($mtime) ?>">
      <?= get_date_jp($mtime), PHP_EOL ?>
    </time>
  </li>
</ul>
