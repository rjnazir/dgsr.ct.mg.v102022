<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_3c11454e6592ec8c8d6879c92e85fe31c95b08c7c9c21d2c2e054533e1dd92d7 extends Twig_Template
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
        $__internal_76ef96284a97ed8245b1c64751da1991ae0e8c5f3fb3cacaa18dce50f54aff19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76ef96284a97ed8245b1c64751da1991ae0e8c5f3fb3cacaa18dce50f54aff19->enter($__internal_76ef96284a97ed8245b1c64751da1991ae0e8c5f3fb3cacaa18dce50f54aff19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_fc0f601f41a3b901b4512308a694e03e6403e19673edc0e4017e472c81cecf35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc0f601f41a3b901b4512308a694e03e6403e19673edc0e4017e472c81cecf35->enter($__internal_fc0f601f41a3b901b4512308a694e03e6403e19673edc0e4017e472c81cecf35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_76ef96284a97ed8245b1c64751da1991ae0e8c5f3fb3cacaa18dce50f54aff19->leave($__internal_76ef96284a97ed8245b1c64751da1991ae0e8c5f3fb3cacaa18dce50f54aff19_prof);

        
        $__internal_fc0f601f41a3b901b4512308a694e03e6403e19673edc0e4017e472c81cecf35->leave($__internal_fc0f601f41a3b901b4512308a694e03e6403e19673edc0e4017e472c81cecf35_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
