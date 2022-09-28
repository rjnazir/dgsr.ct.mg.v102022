<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_d7d948bee6fc0efb2f21be30e3a09934502f2f5dc0206625bec1a3ce8e913769 extends Twig_Template
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
        $__internal_15471b8a61701eebaef55b2b035d10a12745037677e938f9d5e1e20fadb7c748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15471b8a61701eebaef55b2b035d10a12745037677e938f9d5e1e20fadb7c748->enter($__internal_15471b8a61701eebaef55b2b035d10a12745037677e938f9d5e1e20fadb7c748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_b2e1dd827e2aaf4f6794e44e8617e19e6b907cbef7659c106cf14342d8a8360b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2e1dd827e2aaf4f6794e44e8617e19e6b907cbef7659c106cf14342d8a8360b->enter($__internal_b2e1dd827e2aaf4f6794e44e8617e19e6b907cbef7659c106cf14342d8a8360b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_15471b8a61701eebaef55b2b035d10a12745037677e938f9d5e1e20fadb7c748->leave($__internal_15471b8a61701eebaef55b2b035d10a12745037677e938f9d5e1e20fadb7c748_prof);

        
        $__internal_b2e1dd827e2aaf4f6794e44e8617e19e6b907cbef7659c106cf14342d8a8360b->leave($__internal_b2e1dd827e2aaf4f6794e44e8617e19e6b907cbef7659c106cf14342d8a8360b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
