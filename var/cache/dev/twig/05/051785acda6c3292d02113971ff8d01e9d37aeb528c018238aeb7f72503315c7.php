<?php

/* FOSUserBundle:Group:new_content.html.twig */
class __TwigTemplate_b5b7b39c7d799519569cc3c8fca2286056f4d6aed0b96252829d11e3831cef77 extends Twig_Template
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
        $__internal_3d87954e3c65811fd2dcc4d5b9cf2c05104aa93389cef60d313bc04e87704ec9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d87954e3c65811fd2dcc4d5b9cf2c05104aa93389cef60d313bc04e87704ec9->enter($__internal_3d87954e3c65811fd2dcc4d5b9cf2c05104aa93389cef60d313bc04e87704ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        $__internal_dae2c9da1bbc60420f167e4f2f04b6c34792205afadcedd0ac30d5479dca77ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dae2c9da1bbc60420f167e4f2f04b6c34792205afadcedd0ac30d5479dca77ae->enter($__internal_dae2c9da1bbc60420f167e4f2f04b6c34792205afadcedd0ac30d5479dca77ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_new"), "attr" => array("class" => "fos_user_group_new")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_3d87954e3c65811fd2dcc4d5b9cf2c05104aa93389cef60d313bc04e87704ec9->leave($__internal_3d87954e3c65811fd2dcc4d5b9cf2c05104aa93389cef60d313bc04e87704ec9_prof);

        
        $__internal_dae2c9da1bbc60420f167e4f2f04b6c34792205afadcedd0ac30d5479dca77ae->leave($__internal_dae2c9da1bbc60420f167e4f2f04b6c34792205afadcedd0ac30d5479dca77ae_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_group_new'), 'attr': { 'class': 'fos_user_group_new' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.new.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Group:new_content.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new_content.html.twig");
    }
}
