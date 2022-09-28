<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_69ba1a18733f3b12f03c8f98ddb056a3f89ca1c151fb11457b68633029f9ab24 extends Twig_Template
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
        $__internal_3bfc005f22d2204c93c1ffc42142eca6671646112edbee647627244ff19cffce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bfc005f22d2204c93c1ffc42142eca6671646112edbee647627244ff19cffce->enter($__internal_3bfc005f22d2204c93c1ffc42142eca6671646112edbee647627244ff19cffce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_5738778cf2f5b8e3e88fe4ddf08c9e81bdac5552dd036e93014ad9796797f4aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5738778cf2f5b8e3e88fe4ddf08c9e81bdac5552dd036e93014ad9796797f4aa->enter($__internal_5738778cf2f5b8e3e88fe4ddf08c9e81bdac5552dd036e93014ad9796797f4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_3bfc005f22d2204c93c1ffc42142eca6671646112edbee647627244ff19cffce->leave($__internal_3bfc005f22d2204c93c1ffc42142eca6671646112edbee647627244ff19cffce_prof);

        
        $__internal_5738778cf2f5b8e3e88fe4ddf08c9e81bdac5552dd036e93014ad9796797f4aa->leave($__internal_5738778cf2f5b8e3e88fe4ddf08c9e81bdac5552dd036e93014ad9796797f4aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
