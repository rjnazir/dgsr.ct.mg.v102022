<?php

/* @FOSUser/Group/new_content.html.twig */
class __TwigTemplate_ffc7eb837fbd2cee71daa95fe22fbe67084f48bf4cb3fdc9fcb0ea21a04962c5 extends Twig_Template
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
        $__internal_25f443f45da767ac0a58cfaf8b733427e7898d48d876e219a2e3f78b8d3fc750 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25f443f45da767ac0a58cfaf8b733427e7898d48d876e219a2e3f78b8d3fc750->enter($__internal_25f443f45da767ac0a58cfaf8b733427e7898d48d876e219a2e3f78b8d3fc750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new_content.html.twig"));

        $__internal_f561d1dca66be405ad901e7a687621e8263474702d57491a43f93d023fd2be89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f561d1dca66be405ad901e7a687621e8263474702d57491a43f93d023fd2be89->enter($__internal_f561d1dca66be405ad901e7a687621e8263474702d57491a43f93d023fd2be89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new_content.html.twig"));

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
        
        $__internal_25f443f45da767ac0a58cfaf8b733427e7898d48d876e219a2e3f78b8d3fc750->leave($__internal_25f443f45da767ac0a58cfaf8b733427e7898d48d876e219a2e3f78b8d3fc750_prof);

        
        $__internal_f561d1dca66be405ad901e7a687621e8263474702d57491a43f93d023fd2be89->leave($__internal_f561d1dca66be405ad901e7a687621e8263474702d57491a43f93d023fd2be89_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new_content.html.twig";
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
", "@FOSUser/Group/new_content.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new_content.html.twig");
    }
}
