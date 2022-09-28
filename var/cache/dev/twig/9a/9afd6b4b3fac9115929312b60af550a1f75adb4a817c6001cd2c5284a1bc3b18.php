<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_50c30154e52f1d0f7012ee5e30e5f13a5ffed28f210bce54bc8f4fbee70ad378 extends Twig_Template
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
        $__internal_3e410539d9783360c757e5394c092839ae74a98f15bb62c4135a2d01fbc5c470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e410539d9783360c757e5394c092839ae74a98f15bb62c4135a2d01fbc5c470->enter($__internal_3e410539d9783360c757e5394c092839ae74a98f15bb62c4135a2d01fbc5c470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_c698b98ec52cb41fd2c6957e6b270356de3fa9ad6c8b716fcc44face950a939c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c698b98ec52cb41fd2c6957e6b270356de3fa9ad6c8b716fcc44face950a939c->enter($__internal_c698b98ec52cb41fd2c6957e6b270356de3fa9ad6c8b716fcc44face950a939c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_3e410539d9783360c757e5394c092839ae74a98f15bb62c4135a2d01fbc5c470->leave($__internal_3e410539d9783360c757e5394c092839ae74a98f15bb62c4135a2d01fbc5c470_prof);

        
        $__internal_c698b98ec52cb41fd2c6957e6b270356de3fa9ad6c8b716fcc44face950a939c->leave($__internal_c698b98ec52cb41fd2c6957e6b270356de3fa9ad6c8b716fcc44face950a939c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
