<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_e98cafdec0d1acb5959fe8995fd54b5dd514993350554f06c573d6e8703eebe4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3083f95ae21ec499100053ccfe59fdf48e5b28abf186840f51fbf1faf56c4b15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3083f95ae21ec499100053ccfe59fdf48e5b28abf186840f51fbf1faf56c4b15->enter($__internal_3083f95ae21ec499100053ccfe59fdf48e5b28abf186840f51fbf1faf56c4b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_7935d8520baad02181a98dd045be92e7222c33342cd5f590f3b0a9bf825c1b84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7935d8520baad02181a98dd045be92e7222c33342cd5f590f3b0a9bf825c1b84->enter($__internal_7935d8520baad02181a98dd045be92e7222c33342cd5f590f3b0a9bf825c1b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_3083f95ae21ec499100053ccfe59fdf48e5b28abf186840f51fbf1faf56c4b15->leave($__internal_3083f95ae21ec499100053ccfe59fdf48e5b28abf186840f51fbf1faf56c4b15_prof);

        
        $__internal_7935d8520baad02181a98dd045be92e7222c33342cd5f590f3b0a9bf825c1b84->leave($__internal_7935d8520baad02181a98dd045be92e7222c33342cd5f590f3b0a9bf825c1b84_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
