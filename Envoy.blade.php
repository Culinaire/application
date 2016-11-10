@servers(['web'=>['fmccoy.tk']])

@setup
  
  $project  = isset($project) ? $project : 'culinaire.fmccoy.tk';
  $webroot  = isset($webroot) ? $webroot : '/var/www/sites';
  $sitedir  = isset($sitedir) ? $sitedir : sprintf("%s/%s", $webroot, $project);

  $config = [
    'project' => $project,
    'webroot' => $webroot,
    'sitedir' => $sitedir,
  ];

  $remote = isset($remote) ? $remote : 'origin';
  $branch = isset($branch) ? $branch : 'develop';

  $git = [
    'remote' => $remote,
    'branch'  => $branch,
  ];

@endsetup

@task('changedir')
  cd {{ $config['sitedir'] }}
  pwd
@endtask

@task('composerupdate')
  cd {{ $config['sitedir'] }}
  pwd
  composer update
@endtask

@task('gitupdate')
  cd {{ $config['sitedir'] }}
  pwd
  git pull {{ $git['remote'] }} {{ $git['branch'] }}
@endtask

@task('satisbuild')
  cd {{ $config['sitedir'] }}
  pwd
  bin/satis build satis.json public_html/
@endtask

@task('deploy', ['on'=>'web'])
  cd {{ $config['sitedir'] }}
  
  pwd
  
  git pull {{ $git['remote'] }} {{ $git['branch'] }}
  
  bin/satis build satis.json public_html/
@endtask