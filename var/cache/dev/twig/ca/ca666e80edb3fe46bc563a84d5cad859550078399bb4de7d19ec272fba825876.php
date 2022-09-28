<?php

/* @Admin/CtVisiteExtra/edit.html.twig */
class __TwigTemplate_829d560809aca98c4a129aab5c81e25f1ae6b14cb3f415747cbc9f770def0625 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtVisiteExtra/edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb19000ebfd62b0503859f093c218da66d78779f60919a103d9e30e8addd1747 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb19000ebfd62b0503859f093c218da66d78779f60919a103d9e30e8addd1747->enter($__internal_cb19000ebfd62b0503859f093c218da66d78779f60919a103d9e30e8addd1747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtVisiteExtra/edit.html.twig"));

        $__internal_fc30aaf2b57df2666b43e6346643a1046a81b8d1532b73a87fc1c49b884dcb48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc30aaf2b57df2666b43e6346643a1046a81b8d1532b73a87fc1c49b884dcb48->enter($__internal_fc30aaf2b57df2666b43e6346643a1046a81b8d1532b73a87fc1c49b884dcb48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtVisiteExtra/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_visite_extra"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb19000ebfd62b0503859f093c218da66d78779f60919a103d9e30e8addd1747->leave($__internal_cb19000ebfd62b0503859f093c218da66d78779f60919a103d9e30e8addd1747_prof);

        
        $__internal_fc30aaf2b57df2666b43e6346643a1046a81b8d1532b73a87fc1c49b884dcb48->leave($__internal_fc30aaf2b57df2666b43e6346643a1046a81b8d1532b73a87fc1c49b884dcb48_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6141d52bbaba236612ed7e5f5775ee78bbfd8e3e2676c7f02eb21d4d33297f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6141d52bbaba236612ed7e5f5775ee78bbfd8e3e2676c7f02eb21d4d33297f6->enter($__internal_f6141d52bbaba236612ed7e5f5775ee78bbfd8e3e2676c7f02eb21d4d33297f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_24f3b8a51735f1b2e51b706a75fff869f1ff75b46799cdff692a4a2f70c7744e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24f3b8a51735f1b2e51b706a75fff869f1ff75b46799cdff692a4a2f70c7744e->enter($__internal_24f3b8a51735f1b2e51b706a75fff869f1ff75b46799cdff692a4a2f70c7744e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Visite extra ";
        
        $__internal_24f3b8a51735f1b2e51b706a75fff869f1ff75b46799cdff692a4a2f70c7744e->leave($__internal_24f3b8a51735f1b2e51b706a75fff869f1ff75b46799cdff692a4a2f70c7744e_prof);

        
        $__internal_f6141d52bbaba236612ed7e5f5775ee78bbfd8e3e2676c7f02eb21d4d33297f6->leave($__internal_f6141d52bbaba236612ed7e5f5775ee78bbfd8e3e2676c7f02eb21d4d33297f6_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_585e0403fc74140cd21b7f93af3b50300eb1a01eb2e7f84a74e4207bf3edef45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_585e0403fc74140cd21b7f93af3b50300eb1a01eb2e7f84a74e4207bf3edef45->enter($__internal_585e0403fc74140cd21b7f93af3b50300eb1a01eb2e7f84a74e4207bf3edef45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9d4d17c6854d1b6f8575a1f3aff4b0e3ac9a142810fabafd432bd3ecaee8b113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d4d17c6854d1b6f8575a1f3aff4b0e3ac9a142810fabafd432bd3ecaee8b113->enter($__internal_9d4d17c6854d1b6f8575a1f3aff4b0e3ac9a142810fabafd432bd3ecaee8b113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "        <div class=\"callout callout-success\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 17
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une visite extra</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "vsteLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_visite_extra\"/>
                        <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_extra_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_9d4d17c6854d1b6f8575a1f3aff4b0e3ac9a142810fabafd432bd3ecaee8b113->leave($__internal_9d4d17c6854d1b6f8575a1f3aff4b0e3ac9a142810fabafd432bd3ecaee8b113_prof);

        
        $__internal_585e0403fc74140cd21b7f93af3b50300eb1a01eb2e7f84a74e4207bf3edef45->leave($__internal_585e0403fc74140cd21b7f93af3b50300eb1a01eb2e7f84a74e4207bf3edef45_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtVisiteExtra/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 40,  131 => 35,  123 => 30,  114 => 24,  108 => 20,  99 => 17,  96 => 16,  91 => 15,  82 => 12,  79 => 11,  74 => 10,  65 => 9,  46 => 5,  36 => 1,  34 => 7,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backoffice/base_admin.html.twig' %}

{% form_theme edit_form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Modification Visite extra {% endblock %}

{% set menu_visite_extra = true %}

{% block body %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"callout callout-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"callout callout-danger\">
            {{ flashMessage }}
        </div>
    {% endfor %}

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                {{ form_start(edit_form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une visite extra</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.vsteLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_visite_extra\"/>
                        <a href=\"{{ path('visite_extra_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtVisiteExtra/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtVisiteExtra\\edit.html.twig");
    }
}
