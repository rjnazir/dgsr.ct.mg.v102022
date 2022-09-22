<?php

/* AdminBundle:CtTypeUsage:edit.html.twig */
class __TwigTemplate_53358530f2a2ffe09ec4929526c8244ada4e9c6b44dc0cbf1086ee63cae64a15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtTypeUsage:edit.html.twig", 1);
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
        $__internal_cc3fa7bbc1aa54b73f75fb3d7a564802e0575a68ea3a1aedf7d097b19e9d88f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc3fa7bbc1aa54b73f75fb3d7a564802e0575a68ea3a1aedf7d097b19e9d88f5->enter($__internal_cc3fa7bbc1aa54b73f75fb3d7a564802e0575a68ea3a1aedf7d097b19e9d88f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeUsage:edit.html.twig"));

        $__internal_70c934233f22412fb3b511dbfa0fef80475aa86db9fc961dc315ac95de39f46f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70c934233f22412fb3b511dbfa0fef80475aa86db9fc961dc315ac95de39f46f->enter($__internal_70c934233f22412fb3b511dbfa0fef80475aa86db9fc961dc315ac95de39f46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeUsage:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_type_usage"] = true;
        // line 8
        $context["menu_type_usage_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc3fa7bbc1aa54b73f75fb3d7a564802e0575a68ea3a1aedf7d097b19e9d88f5->leave($__internal_cc3fa7bbc1aa54b73f75fb3d7a564802e0575a68ea3a1aedf7d097b19e9d88f5_prof);

        
        $__internal_70c934233f22412fb3b511dbfa0fef80475aa86db9fc961dc315ac95de39f46f->leave($__internal_70c934233f22412fb3b511dbfa0fef80475aa86db9fc961dc315ac95de39f46f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_556bb404a26a3cafd3ae5ac38aee604264af8df8c0e2f430cec587e41f122cf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_556bb404a26a3cafd3ae5ac38aee604264af8df8c0e2f430cec587e41f122cf8->enter($__internal_556bb404a26a3cafd3ae5ac38aee604264af8df8c0e2f430cec587e41f122cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5a49c48a69e38b738295fc3eb1ffa1bd4e88ad8ce6961983c6cb8a66ca3d82c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a49c48a69e38b738295fc3eb1ffa1bd4e88ad8ce6961983c6cb8a66ca3d82c7->enter($__internal_5a49c48a69e38b738295fc3eb1ffa1bd4e88ad8ce6961983c6cb8a66ca3d82c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Type d'usage ";
        
        $__internal_5a49c48a69e38b738295fc3eb1ffa1bd4e88ad8ce6961983c6cb8a66ca3d82c7->leave($__internal_5a49c48a69e38b738295fc3eb1ffa1bd4e88ad8ce6961983c6cb8a66ca3d82c7_prof);

        
        $__internal_556bb404a26a3cafd3ae5ac38aee604264af8df8c0e2f430cec587e41f122cf8->leave($__internal_556bb404a26a3cafd3ae5ac38aee604264af8df8c0e2f430cec587e41f122cf8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9aaec3a468011609e061580b952e2fe57ec1e97eaf86bab0a38aefd935d7ba36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aaec3a468011609e061580b952e2fe57ec1e97eaf86bab0a38aefd935d7ba36->enter($__internal_9aaec3a468011609e061580b952e2fe57ec1e97eaf86bab0a38aefd935d7ba36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e30831357dcf812eb264318d1d6fa15c21cffb115f33abcdebe08b7a2b67e59d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e30831357dcf812eb264318d1d6fa15c21cffb115f33abcdebe08b7a2b67e59d->enter($__internal_e30831357dcf812eb264318d1d6fa15c21cffb115f33abcdebe08b7a2b67e59d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer un type d'usage</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "tpuLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_usage\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_usage_index");
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
        
        $__internal_e30831357dcf812eb264318d1d6fa15c21cffb115f33abcdebe08b7a2b67e59d->leave($__internal_e30831357dcf812eb264318d1d6fa15c21cffb115f33abcdebe08b7a2b67e59d_prof);

        
        $__internal_9aaec3a468011609e061580b952e2fe57ec1e97eaf86bab0a38aefd935d7ba36->leave($__internal_9aaec3a468011609e061580b952e2fe57ec1e97eaf86bab0a38aefd935d7ba36_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtTypeUsage:edit.html.twig";
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

{% block title %}{{ parent() }} Modification Type d'usage {% endblock %}

{% set menu_type_usage        = true %}
{% set menu_type_usage_create = true %}

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
                        <h3 class=\"box-title\">Editer un type d'usage</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.tpuLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_usage\"/>
                        <a href=\"{{ path('type_usage_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtTypeUsage:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtTypeUsage/edit.html.twig");
    }
}
