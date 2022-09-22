<?php

/* @Admin/CtSourceEnergie/edit.html.twig */
class __TwigTemplate_62bf73a6e42cf7a281d738a876e4bed708d09461e34efcc93db4ee8ec6b10170 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtSourceEnergie/edit.html.twig", 1);
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
        $__internal_75576db828cfc69290987287239c4e9034669e550fd1e29f5be1c518fabd34b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75576db828cfc69290987287239c4e9034669e550fd1e29f5be1c518fabd34b1->enter($__internal_75576db828cfc69290987287239c4e9034669e550fd1e29f5be1c518fabd34b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtSourceEnergie/edit.html.twig"));

        $__internal_053b7e21d8b970a901135f71f621e5573eaf36e96cfb19a49b1be74c84950e85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_053b7e21d8b970a901135f71f621e5573eaf36e96cfb19a49b1be74c84950e85->enter($__internal_053b7e21d8b970a901135f71f621e5573eaf36e96cfb19a49b1be74c84950e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtSourceEnergie/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_energie"] = true;
        // line 8
        $context["menu_energie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75576db828cfc69290987287239c4e9034669e550fd1e29f5be1c518fabd34b1->leave($__internal_75576db828cfc69290987287239c4e9034669e550fd1e29f5be1c518fabd34b1_prof);

        
        $__internal_053b7e21d8b970a901135f71f621e5573eaf36e96cfb19a49b1be74c84950e85->leave($__internal_053b7e21d8b970a901135f71f621e5573eaf36e96cfb19a49b1be74c84950e85_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3beac8914e851cb94dbd6f96dee2519e4e3e1575ecb6a123f7bb86822892c370 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3beac8914e851cb94dbd6f96dee2519e4e3e1575ecb6a123f7bb86822892c370->enter($__internal_3beac8914e851cb94dbd6f96dee2519e4e3e1575ecb6a123f7bb86822892c370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0089277a6edf0c61554ad292abb938ff93c4abfa5929e804fce1d2e87713786a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0089277a6edf0c61554ad292abb938ff93c4abfa5929e804fce1d2e87713786a->enter($__internal_0089277a6edf0c61554ad292abb938ff93c4abfa5929e804fce1d2e87713786a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Source Energie ";
        
        $__internal_0089277a6edf0c61554ad292abb938ff93c4abfa5929e804fce1d2e87713786a->leave($__internal_0089277a6edf0c61554ad292abb938ff93c4abfa5929e804fce1d2e87713786a_prof);

        
        $__internal_3beac8914e851cb94dbd6f96dee2519e4e3e1575ecb6a123f7bb86822892c370->leave($__internal_3beac8914e851cb94dbd6f96dee2519e4e3e1575ecb6a123f7bb86822892c370_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ca6c9084974086c169458400127096c2141b94b4f518db7b877ce4532dd747f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ca6c9084974086c169458400127096c2141b94b4f518db7b877ce4532dd747f->enter($__internal_3ca6c9084974086c169458400127096c2141b94b4f518db7b877ce4532dd747f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e3abce0e076f0f05aca7f63686af79e136fd828d64035fae399daf8412204b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e3abce0e076f0f05aca7f63686af79e136fd828d64035fae399daf8412204b6->enter($__internal_8e3abce0e076f0f05aca7f63686af79e136fd828d64035fae399daf8412204b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"callout callout-success\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 18
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une source d'energie</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "sreLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_energie\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("energie_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_8e3abce0e076f0f05aca7f63686af79e136fd828d64035fae399daf8412204b6->leave($__internal_8e3abce0e076f0f05aca7f63686af79e136fd828d64035fae399daf8412204b6_prof);

        
        $__internal_3ca6c9084974086c169458400127096c2141b94b4f518db7b877ce4532dd747f->leave($__internal_3ca6c9084974086c169458400127096c2141b94b4f518db7b877ce4532dd747f_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtSourceEnergie/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 41,  133 => 36,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification Source Energie {% endblock %}

{% set menu_energie        = true %}
{% set menu_energie_create = true %}

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
                        <h3 class=\"box-title\">Editer une source d'energie</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.sreLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_energie\"/>
                        <a href=\"{{ path('energie_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtSourceEnergie/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtSourceEnergie\\edit.html.twig");
    }
}
