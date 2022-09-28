<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_892cf24923da48264de859160136d3ea7ea18d549edd83306bbf306a666a7db1 extends Twig_Template
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
        $__internal_1dd27c97a2ba14bce98b44f7fc55665006718be9eeae0680bce9283c00c3ad9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dd27c97a2ba14bce98b44f7fc55665006718be9eeae0680bce9283c00c3ad9d->enter($__internal_1dd27c97a2ba14bce98b44f7fc55665006718be9eeae0680bce9283c00c3ad9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_27acf35e3aa5894ffc6e56a2ea49c9b0b2945782dc61424daab9d687897102ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27acf35e3aa5894ffc6e56a2ea49c9b0b2945782dc61424daab9d687897102ea->enter($__internal_27acf35e3aa5894ffc6e56a2ea49c9b0b2945782dc61424daab9d687897102ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_1dd27c97a2ba14bce98b44f7fc55665006718be9eeae0680bce9283c00c3ad9d->leave($__internal_1dd27c97a2ba14bce98b44f7fc55665006718be9eeae0680bce9283c00c3ad9d_prof);

        
        $__internal_27acf35e3aa5894ffc6e56a2ea49c9b0b2945782dc61424daab9d687897102ea->leave($__internal_27acf35e3aa5894ffc6e56a2ea49c9b0b2945782dc61424daab9d687897102ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
