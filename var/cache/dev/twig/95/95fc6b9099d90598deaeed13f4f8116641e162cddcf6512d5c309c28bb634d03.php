<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_1896c7782fde5e66da02fc77b2c64be55c74012059b2a0191f598089da186973 extends Twig_Template
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
        $__internal_abc5774f9244cad9dd967a251755e16a4cc29663c55ee4b60dbfd1c7ae52b69a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abc5774f9244cad9dd967a251755e16a4cc29663c55ee4b60dbfd1c7ae52b69a->enter($__internal_abc5774f9244cad9dd967a251755e16a4cc29663c55ee4b60dbfd1c7ae52b69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_e8e7a6b9472b7f21c383d73288ef547b3d337368f0415764d35dcc98a04598f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e7a6b9472b7f21c383d73288ef547b3d337368f0415764d35dcc98a04598f0->enter($__internal_e8e7a6b9472b7f21c383d73288ef547b3d337368f0415764d35dcc98a04598f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_abc5774f9244cad9dd967a251755e16a4cc29663c55ee4b60dbfd1c7ae52b69a->leave($__internal_abc5774f9244cad9dd967a251755e16a4cc29663c55ee4b60dbfd1c7ae52b69a_prof);

        
        $__internal_e8e7a6b9472b7f21c383d73288ef547b3d337368f0415764d35dcc98a04598f0->leave($__internal_e8e7a6b9472b7f21c383d73288ef547b3d337368f0415764d35dcc98a04598f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
