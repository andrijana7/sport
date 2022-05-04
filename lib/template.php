<?php
  namespace App\Lib;

  /**
   * Class Template
   */
  class Template {
    /**
     * @static
     */
    public static string $template_dir;

    /**
     * @var string
     */
    private string $path;

    /**
     * @var array
     */
    private array $parameters = [];

    /**
     * Constructor
     * 
     * @param string $path
     * @param array $parameters
     */
    public function __construct(string $path = null, array $parameters = []) {
      $this->path = $path ?? self::$template_dir;
      $this->path = rtrim($this->path, '/') . '/';
      $this->parameters = $parameters;
    }

    /**
     * This function creates something bla bla
     * 
     * @param string $view
     * @param array $context
     * @return string
     * @throws \Exception
     */
    public function render(string $view, array $context = []): string {
      if (!file_exists($file = $this->path . $view)) {
        throw new \Exception(sprintf('The file %s%s could not be found.', $this->path, $view));
      }

      extract(array_merge($context, ['template' => $this]));

      ob_start();

      include ($file);

      return ob_get_clean();
    }

    /**
     * @param string $key
     * @return mixed
     */
    public function get(string $key) {
      return $this->parameters[$key] ?? null;
    }
  }

  ?>